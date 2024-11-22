<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class CheckDatabaseSetup
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
        // Vérifie si les tables `users` et `setup` sont vides
        $isUsersTableEmpty = DB::table('users')->count() === 0;
        $isInfossSchoolsTableEmpty = DB::table('infos_schools')->count() === 0;

        // Si les deux tables sont vides, redirige vers la page de configuration
        if ($isUsersTableEmpty && $isInfossSchoolsTableEmpty) {
            return redirect()->route('setup');
        }

        // Sinon, continue vers la page d'accueil
        return $next($request);
    }
}
