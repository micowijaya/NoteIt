<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function user()
    {
        $user = User::findorfail(Auth::user()->id);
        return view('profile', compact('user'));
    }

    public function update(Request $request, $id){
        User::findorfail($id)->update([
            "email" => $request->profileEmail,
            "name" => $request->profileName,
        ]);
        return back();
    }
}
