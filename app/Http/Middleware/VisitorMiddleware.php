<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Simpan data pengunjung ke dalam database
        Visitor::create([
            'ip_address' => $request->ip(),
            'page' => $request->path(),
            'visited_at' => now(),
        ]);


        return $next($request);
    }
}
