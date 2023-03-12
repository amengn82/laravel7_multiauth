<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Hash;
use Auth;
use App\User;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function Callback()
    {
        $social = Socialite::driver('facebook')->stateless()->user();
        // dd($social);
        // $user->token;
        $id = $social->id;
        $name = $social->name;
        $email = $social->email;
        $secret = Hash::make($id);

        if(!User::where('email','=',$email)->first()){
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = $secret;
            $user->is_admin = '0';
            $user->save();
        }
        if(Auth::attempt(['email'=>$email, 'password'=>$id])){
            return redirect()->to('/home');
        }
        return redirect()->to('/home');
    }
}
