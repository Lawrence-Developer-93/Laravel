<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'email' => 'required'
        ]);
        $user = new User;
        $user->email = $request->input('email');
        $user->save();

        return redirect('/')->with('success');
    }

}
