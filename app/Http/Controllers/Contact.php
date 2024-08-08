<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function email(Request $request) {
        // dd($request->all());
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
 