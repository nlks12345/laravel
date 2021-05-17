<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Models\User;
use Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request){
        $login = $request->validate{[
            'email' => 'required|string',
            'password' => 'required|string'
        ]};
 return response([
            $login
        ]);
        
       /* //if( !Auth::attempt($login)){
            return response([
                'message'=>'Invalid Login credentials!'
         //   ]);
      //  }

        $accessToken = Auth::user()->createToken('authToken')->$accessToken;

      //  return response([
            'user' => Auth::user(),
            'access_token' => $accessToken,
        ]);*/

    }
}
