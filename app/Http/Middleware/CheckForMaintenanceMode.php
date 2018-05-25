<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class CheckForMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( app()->isDownForMaintenance() ) {
            if ( !$request->is('dashboard*') && !$request->is('coming-soon') ) {
                return response()->view('app.pages.coming-soon');
            }
        }
        return $next($request);
    }
}
