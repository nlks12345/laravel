<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Models\User;


class UserController extends Controller
{
     public function create(Request $request){

        $users = new User;

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        
        $users->save();
        //$json = json_encode($api);
        //return json, NOT view
        
        return response()->json($users);

      

     }


      public function show(){

        $users = User::collection(User::paginate(5));
        
        return response()->json($users);
       // return response()->json('harlor');
     }


      public function showById(Request $request,$id){

        $users = User::find($id);
        
        return response()->json($users);

     }


      public function updateById(Request $request,$id){

        $users = User::find($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        
        $users->save();
        return response()->json($users);

     }


     public function deleteById(Request $request,$id){

        $users = User::find($id);
        if($users){
            $users->delete();

        }
        else{
           return response()->json(['message' => 'Can\'t find user id ='.$id]); 
        }
       
        return response()->json($users);

     }



}
