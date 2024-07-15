<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){

        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //  flashy()->success('Login Successfully ...', '#');
            return redirect()->route('admin.dashboard');
        }
        // flashy()->error('Invalid Username or Password ', '#');
        return back()->with('loginError', 'These credentials do not match our records.');
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been log out!');
    }

    public function register(){
        return view('register');

    }

    public function registerUser(Request $request) {

        // Validate the incoming request data
        $validatedData = $request->validate([
            "password" => ['required', 'min:8'],
            "name" => ['required'],
            "email" => ['required',  'unique:users,email']
            //'email:rfc,dns',confirmed
        ]);

        // Hash the password
        $validatedData["password"] = Hash::make($validatedData["password"]);

        // Create the user
        $user = User::create([
            "name" =>  $validatedData["name"],
            "password" =>  $validatedData["password"],
            "email" =>  $validatedData["email"],
            "role" =>  'user',
        ]);

        // Log in the user
        Auth::login($user);

        // Redirect the user after registration
        // flashy()->success('Account has been Created. You are now logged in.');
        return redirect('/')->with('success', 'Registered Successful!');
    }

     public function resetPassword($key){
        return view('reset-password',['key'=>$key]);
    }
    public function resetPasswordCh(Request $request){
        $validatedData = $request->validate([
            "password" => ['required','confirmed','min:3'],
        ]);

        if($validatedData){
           $User=User::find(base64_decode($request->key));
           if ($User) {
                  $User->update(['password'=>Hash::make($validatedData["password"])]);
                //   flashy()->info('Password has been Updated!', '#');
            }else{

                // flashy()->error('Invalid User Id', '#');

            }
        }
            return back()->with('error', 'Password has been not Updated!');
    }


}
