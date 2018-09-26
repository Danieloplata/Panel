<?php

namespace App\Http\Middleware;

use Closure;

class CountryCheck
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
        // Check respondent country vs list of allowed countries set on the Panel
        $allowedCountries = ['GB', 'RO'];
        //$countryCode = "GB";
        if (!in_array($countryCode, $allowedCountries)) {
            return redirect('error.php?failedCountryCheck');
        }

        return $next($request);
    }
}
