<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function redirectWA($wa, $text){
        $wa = $wa;
        $text = $text;
        return view('thanks', compact('wa'), compact('text'));
    }
}
