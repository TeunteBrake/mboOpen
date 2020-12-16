<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banen;

class BanenController extends Controller
{
    public function index(){
        return view('admin.banen', ['banen' => Banen::all()]);
    }

    public function indexHome(){
        return view('welcome', ['banen' => Banen::all()]);
    }

    public function create(){
        return view('admin.banenCreate');
    }

    public function save(Request $request){
        $baan = new Banen;
        $baan->soort = $request->soortBaan;
        $baan->save();

        return redirect()->route('banen');
    }

    public function edit(Banen $baan){
        return view('admin.banenEdit')->with('baan', $baan);
    }

    public function update(Banen $baan)
    {
        $baan->update(request()->validate([
            'soort' => 'required'
        ]));

        return redirect()->route('banen');
    }

    public function delete(Banen $baan)
    {
        $baan->delete();
        return redirect()->route('banen');
    }
}
