<?php
    namespace App\Http\Controllers;
            
    class UserController extends Controller
    {        
        public function index()
        {
            return view('videos/index');
        }

        // public function create(Request $user)
        // {
        //     dd($user->name); 

        //     $user = User::create([
        //         "name"=> $user->name, 
        //         "email"=> $user->email
        //     ]);
        // }
    }
?>