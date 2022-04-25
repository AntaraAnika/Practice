<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function new($id)
    {
        return view('user.new_view', compact('id'));
    }
}
