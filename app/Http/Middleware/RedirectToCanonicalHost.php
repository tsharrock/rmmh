<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToCanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        $canonical = parse_url((string) config('app.url'));
        $canonicalHost = $canonical['host'] ?? null;
        $canonicalScheme = $canonical['scheme'] ?? 'https';

        if (! $canonicalHost || app()->environment('local', 'testing')) {
            return $next($request);
        }

        if ($request->getHost() !== $canonicalHost || $request->getScheme() !== $canonicalScheme) {
            $target = $canonicalScheme.'://'.$canonicalHost.$request->getRequestUri();

            return redirect()->to($target, 301);
        }

        return $next($request);
    }
}
