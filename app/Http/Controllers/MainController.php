<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
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
}
