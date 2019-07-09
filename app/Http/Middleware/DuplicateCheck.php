<?php

namespace App\Http\Middleware;

use Closure;
use App\Panel;
use App\Respondent;
use Illuminate\Support\Facades\Route;

class DuplicateCheck
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
        $respondentID = $request->route()->parameter('respondentid');

        $existingRespondent = Respondent::where('panel_id', $panelID)->where('respondentID', $respondentID)->first();

        $route = Route::getCurrentRoute()->getActionMethod();

        if ($route === "start")
        {
            if ($existingRespondent !== null)
            {
                if ($existingRespondent->status === "Incomplete")
                {
                    $existingRespondent->delete();
                }
                else
                {
                    return redirect(route('error', 'duplicate'));
                }
            }
        }

        if ($route === "passback" && $existingRespondent !== null)
        {
            if ($existingRespondent->status === "Complete")
            {
                return redirect(route('error', 'duplicate'));
            }
        }
        
        // What needs to be logged here?

        return $next($request);
    }
}
