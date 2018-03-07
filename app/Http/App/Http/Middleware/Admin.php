<?php
/**
 * Created by PhpStorm.
 * User: Kristiyan
 * Date: 5.03.18
 * Time: 2:19
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin

{
    public function handle($request, Closure $next)

    {

        if(Auth::check()){

            if(Auth::user()->isAdmin()){

                return $next($request);

            }
        }

        return redirect('/admin/users');

    }
}