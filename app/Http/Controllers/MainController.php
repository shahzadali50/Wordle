<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function verifyDashboard()
    {

        if (Auth::check()) {
            if (auth()->user()->role == "admin") {
                return redirect()->route('admin.dashboard');
            } else {
                return view('login');
            }
        }
    }
    public function about()
    {
        return view('livewire.about');
    }

    public function contact()
    {
        return view('livewire.contact-us');
    }

    public function privacyPolicy()
    {
        return view('livewire.privacy-policy');
    }

    public function copyright()
    {
        return view('livewire.copyright');
    }

    public function termsOfUse()
    {
        return view('livewire.term-of-use');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
