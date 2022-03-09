<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        // dd($user);
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/home');
        }
        // $email=request('email');
        // $password=request('password');
        //dd($email,$password);
        // $user= User::where(['email'=>$req->email])->first();
        // if(Hash::check($req->password,$user->password))
        // {
        //     $req->session()->put('user',$user);
        //     return redirect('/home');
        // }
        // else{
        //     return "Username or password is not matched";
        // }
    }

    // function registation(Request $req){
    //     // return view('registation');
    //     return"fsdjfhsdkd";
    // }
    function store(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        $name=request('name');
        $email=request('email');
        $password=request('password');
  
        // $input = $req->all();
        // Hash::make

        DB::table('users')->insert([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($email)
        ]);
  
    
        // User::create($input);
     
        return redirect('/login');
    }
}