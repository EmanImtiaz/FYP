<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Your logic for role-based authorization can be implemented here

        // Example: Check if the user has the required role
         if (!$request->user() || !$request->user()->hasAnyRole(...$roles)) {
             abort(403, 'Unauthorized action.');
         }

        // For now, let's return the result of the next middleware in the pipeline
        return $next($request);
    }
    
}
