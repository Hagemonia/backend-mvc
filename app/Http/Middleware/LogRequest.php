<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequest
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Request masuk: ' . $request->method() . ' ' . $request->path());

        $response = $next($request);

        Log::info('Response keluar dengan status: ' . $response->getStatusCode());

        return $response;
    }
}