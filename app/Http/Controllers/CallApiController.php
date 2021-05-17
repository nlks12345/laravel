<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class CallApiController extends Controller
{
     public function getAll(){

        //$data = Http::get('http://127.0.0.1:8000/api/user/')->json();
        
     
       // $data = Http::get('/api/user/')->json();

        $client = new \GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8000',
            'defaults' => [
                'exceptions' => false
            ]   
        ]);

        if($client){

            $response = $client->get('/api/user/');
        }
        else{
            return view('users_table',['no data']);

        }

        
       
        return view('users_table',['response' => $response['data']]);

     }





}
