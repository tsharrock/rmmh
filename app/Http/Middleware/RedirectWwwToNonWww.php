<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectWwwToNonWww
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if (str_starts_with($host, 'www.')) {
            $url = $request->getSchemeAndHttpHost() . $request->getRequestUri();
            $url = str_replace('://www.', '://', $url);

            return redirect($url, 301);
        }

        return $next($request);
    }
}
