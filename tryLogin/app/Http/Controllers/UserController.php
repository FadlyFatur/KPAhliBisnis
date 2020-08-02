<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function getSessionData(Request $request)
    {
        if($request->session()->has('key'))
        {
            echo $request->session()->get('key');
        }
        else{
            echo 'No key in the session';
        }

        //
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('key','Ahlibisnis');
        echo "key has been added to the session";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('key');
        echo "key has been removed from the session";
    }

    
    //
}
