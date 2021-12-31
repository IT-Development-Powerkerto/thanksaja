<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function redirectWA($wa, $text){
        // echo "<script>setTimeout(function(){ window.location.href = 'https://api.whatsapp.com/send/?phone='.$wa; }, 3000);</script>";
        $wa = $wa;
        $text = $text;
        return view('welcome', compact('wa'), compact('text'));
    }
}
