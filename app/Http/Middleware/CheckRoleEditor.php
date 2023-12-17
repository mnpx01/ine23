<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Team;

class CheckRoleEditor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $teamAdmin = Team::where('name', 'administradores')->first();
        if (!($user instanceof User && User::isEditor($user))) {
            return back()->withErrors(['message' => 'No
            autenticado o sin permisos de edición.']);
        }
        return $next($request);
    }
}
