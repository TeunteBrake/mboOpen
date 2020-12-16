<?php

namespace App\Http\Controllers;

use App\Banen;
use App\User;
use Illuminate\Http\Request;
use App\BanenReserveringen;
use Illuminate\Support\Facades\Auth;

class ReserveringController extends Controller
{

    public function index(){
        return view('admin.reserveringen', ['reserveringen' => BanenReserveringen::all()]);
    }

    public function create(){
        return view('admin.reserveringenCreate', ['leden' => User::all(), 'banen' => Banen::all()]);
    }

    public function save(Request $request){
        $user = Auth::user();

        $reservering = new BanenReserveringen;
        $reservering->baanID = $request->selectBaan;
        $reservering->userID = $request->selectLid;
        $reservering->datum = $request->selectDatum;
        $reservering->tijdsDuur = $request->selectTijd;
        $reservering->omschrijving = $request->omschrijving;
        $reservering->save();

        return redirect()->route('reserveringen');
    }

    public function saveWeb(Request $request){
        $user = Auth::user();

        $reservering = new BanenReserveringen;
        $reservering->baanID = $request->selectBaan;
        $reservering->userID = $user->id;
        $reservering->datum = $request->selectDatum;
        $reservering->tijdsDuur = $request->selectTijd;
        $reservering->omschrijving = $request->omschrijving;
        $reservering->save();

        return redirect()->route('webHome');
    }

    public function edit(BanenReserveringen $reservering){
        return view('admin.reserveringenEdit', ['reservering' => $reservering, 'leden' => User::all(), 'banen' => Banen::all()]);
    }

    public function update(BanenReserveringen $reservering)
    {
        $reservering->update();

        return redirect()->route('reserveringen');
    }

    public function delete(BanenReserveringen $reservering)
    {
        $reservering->delete();
        return redirect()->route('reserveringen');
    }


}
