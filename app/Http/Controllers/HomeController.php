<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('home', compact('notes'));
    }

    public function delete($id)
    {
        Note::where('user_id', Auth::user()->id)->where('id', $id)->delete();
        // Note::destroy($id);
        return back();
    }

    public function create(Request $request)
    {
        Note::create([
            "user_id" => Auth::user()->id,
            "title" => $request->inputTitle,
            "usernote" => $request->inputContent,
            "location" => $request->inputLocation,
            "created_at" => Date::now(),
            "updated_at" => Date::now(),
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        Note::findorfail($id)->update([
            "title" => $request->inputTitle,
            "usernote" => $request->inputContent,
            "location" => $request->inputLocation,
            "updated_at" => Date::now(),
        ]);
        return back();
    }
}
