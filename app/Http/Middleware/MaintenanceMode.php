<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // If record in configurations table with name of "maintenance" and value of "on", redirect to maintenance page
        $maintenance = DB::table('configurations')
                    ->where('name', '=', 'maintenance')
                    ->first();

        if ($maintenance->value == 'on') {
            return redirect('/maintenance');
        }
        else {
            return $next($request);
        }   
    }
}
