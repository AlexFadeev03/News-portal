<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure(Request): RedirectResponse $next
     * @return Response|RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username !== 'ADMIN') {
                    abort(Response::HTTP_FORBIDDEN);
                }

        return $next($request);
    }
}
