<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class RequireUnitedStates
{
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        // Allow private/loopback addresses (local dev, internal health checks)
        if (! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            return $next($request);
        }

        $country = Cache::remember("geoip_{$ip}", now()->addDay(), function () use ($ip) {
            try {
                $token = config('services.ipinfo.token');
                $url = "https://ipinfo.io/{$ip}/country" . ($token ? "?token={$token}" : '');
                $response = Http::timeout(3)->get($url);

                return $response->successful() ? trim($response->body()) : null;
            } catch (\Throwable) {
                return null; // fail open on API error
            }
        });

        if ($country !== null && $country !== 'US') {
            abort(403);
        }

        return $next($request);
    }
}
