# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

Marketing site for **Redmond Medical and Mental Health** (RMMH), a Utah/Arizona clinic. Despite the Laravel 12 / PHP 8.3 stack, this is effectively a static brochure site: routes return Blade views, there is one real controller (`ContactController`) that sends a Mailgun email, and the only model is the framework's default `User`. The migrations/database scaffolding is Laravel boilerplate and is not in active use.

## Common commands

- `composer dev` — runs the full local stack (server, queue listener, `pail` log tail, Vite) via concurrently. This is the normal way to develop.
- `php artisan serve` — Laravel dev server only.
- `npm run dev` / `npm run build` — Vite dev server / production build for `resources/sass/app.scss` and `resources/js/app.js`.
- `composer test` — clears config, then runs `php artisan test` (PHPUnit). Run a single test with `php artisan test --filter=TestName` or `php artisan test tests/Feature/SomeTest.php`.
- `vendor/bin/pint` — Laravel Pint formatter (the only configured linter).

The Node version is pinned in `.nvmrc`. Mailgun is used for outgoing mail (`symfony/mailgun-mailer`).

## Architecture

### Routing is the index of pages
`routes/web.php` is the canonical list of pages on the site. Most routes are `Route::view(...)` or closures returning `view('...')` — no controllers. New marketing pages are added by:
1. Adding a `Route::view('/slug', 'slug')->name('slug')` (or closure) entry.
2. Creating `resources/views/slug.blade.php` that `@extends('layout')`.
3. If linked from the nav, adding a `<li>` to `resources/views/partials/header.blade.php` using `route('slug')`.

Telehealth location pages live under `resources/views/telehealth/*.blade.php` and use dotted view names (`telehealth.salt-lake-city`).

### Blade layout contract
All pages extend `resources/views/layout.blade.php`, which yields:
- `@yield('title')`, `@yield('description')`, `@yield('keywords')` — SEO meta tags. **Always set these per page**; the layout has fallback values but they are generic.
- `@yield('jsonld')` — optional JSON-LD structured data injected into `<head>`.
- `@yield('content')` — main body, rendered between `partials.header` and `partials.footer`.

The layout loads assets via `@vite(['resources/sass/app.scss', 'resources/js/app.js'])` — these are the only two Vite entry points (see `vite.config.js`). Bootstrap 5 + Tailwind v4 (via `@tailwindcss/vite`) are both present; styling is primarily Bootstrap utility classes plus the custom SCSS in `resources/sass/`.

### Hero background pattern
Page hero sections use `<section id="hero" class="hero {variant}">` where the variant class (e.g. `about`, `psychiatric-care`, `cedar-city`) selects a `background-image` from `resources/sass/app.scss`. **When adding a new location/service page, add a matching `&.variant` block in `app.scss` pointing at a webp in `resources/sass/img/`** — otherwise the hero will render blank.

### Contact form
`ContactController@submit` (POST `/contact`) validates name/email/phone/message and sends `App\Mail\ContactMail` to `env('MAIL_TO_ADDRESS')`. The mail body is `resources/views/emails/contact_template.blade.php`. This is the only dynamic flow in the app.

### Content sources
`content_docs/` holds the Word-doc source content the marketing pages were built from. They are reference material, not loaded at runtime — useful when porting copy into a new Blade view.
