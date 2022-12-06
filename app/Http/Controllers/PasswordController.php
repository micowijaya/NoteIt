<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function password()
    {
        $user = User::findorfail(Auth::user()->id);
        return view('changepassword', compact('user'));
    }
}
