<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Support\Jsonable;
class CallApiController extends Controller
{
     public function getAll(){

        $data = Http::get('https://first-laravel-nlks.herokuapp.com/api/user/')->json();
        

        if($data){

            return view('users_table',['data'=>$data]);
          
        }
        else{
            return view('users_table',['data'=>'no data']);

        }

        
       
        

     }

     public function registerView(){

        return view('users');
     }


     public function registerAPI(Request $request){

        $data = Http::post('https://first-laravel-nlks.herokuapp.com/api/user/create')->json();

        return "Sucessfull";
     }





}
