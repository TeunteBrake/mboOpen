<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LedenController extends Controller
{
    public function index(){
        return view('admin.leden', ['users' => User::all()]);
    }

    public function create(){
        return view('admin.ledenCreate');
    }

    public function save(Request $request){
        $lid = new User;
        $lid->name = $request->naam;
        $lid->email = $request->email;
        $lid->password = $request->wachtwoord;
        $lid->lid = 1;
        $lid->save();

        return redirect()->route('leden');
    }
}
