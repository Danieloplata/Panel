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
        $allowedCountries = array('GB', 'RO');

        if(in_array($countryCode, $allowedCountries)) {
            return $next($request);
        } else {
            return redirect('error.php?failedCountryCheck');
        }
    }
}
