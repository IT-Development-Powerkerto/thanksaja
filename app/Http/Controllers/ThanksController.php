<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function redirectWA($wa, $text, $message){
        $wa = $wa;
        $text = $text;
        $message = $message;
        // dd($message);
        return view('thanks', compact('wa'), compact('text'))->with('message', $message);
    }
}
