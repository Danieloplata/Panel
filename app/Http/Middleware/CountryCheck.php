<?php

namespace App\Http\Middleware;

use Closure;
use App\Panel;

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
        $panelID = $request->route()->parameter('panelid');
        $panel = Panel::findOrFail($panelID);
        $allowedCountries = $panel->countries->pluck('countryCode')->toArray();

        // Replace this with CloudFlare, use CF headers for it
        //$curl = curl_init();

//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "http://ip-api.com/json/".$_SERVER['REMOTE_ADDR'],
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_TIMEOUT => 30000,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "GET",
//            CURLOPT_HTTPHEADER => array(
//                'Content-Type: application/json',
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        $err = curl_error($curl);
//        curl_close($curl);
//        $geoloc = json_decode($response);
        //$countryCode = sanitise($geoloc->countryCode);
        $countryCode = "GB";
        session(['countryCode' => $countryCode]);
        
        if (!in_array($countryCode, $allowedCountries)) {
            return redirect(route('error', 'country'));
        }

        return $next($request);
    }
}
