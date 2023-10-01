<?php

namespace App\Http\Middleware;

use App\Exceptions\GeneralJsonException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Symfony\Component\HttpFoundation\Response;


class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards): Response
    {
        return $next($request);
//        if ($request->user()) {
//            return $next($request);
//        }
//
//        $credentials = [
//            'email' => $request->getUser(),
//            'password' => $request->getPassword()
//        ];
//
//        if (!$token = auth()->attempt($credentials)) {
//            throw new GeneralJsonException('Incorrect username or password');
//        }
//
//        return $next($request)->header('Authorization', 'Bearer '.$token);
    }
}
