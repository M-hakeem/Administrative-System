<?php

namespace App\Http\Middleware;

use App\Models\Distributor;
use Closure;
use Illuminate\Http\Request;

class UpdateList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request,Closure $next)
    {
        if($distributor->user_id != auth()->id())
        {
            return redirect('/dashboard')->with('message','Unauthorized');
        }
        return $next($request);
    }
}
