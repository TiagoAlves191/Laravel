<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TesteController extends Controller
{
    public function index() {
        $users = User::all();

        return view('teste', compact('users'));
    }
}
