<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramRegisterController extends Controller
{
    public function create()
    {
        return view('program.register', ['title' => 'Register']);
    }
}
