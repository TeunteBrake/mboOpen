@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="/admin/reserveringen/save" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="baanSelect">Selecteer Baan</label>
                        <select class="form-control" name="selectBaan" id="baanSelect">
                            @foreach($banen as $baan)
                                <option value="{{$baan->id}}">{{$baan->soort}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectLid">Selecteer Lid</label>
                        <select class="form-control" name="selectLid" id="selectLid">
                            @foreach($leden as $lid)
                                <option value="{{$lid->id}}">{{$lid->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectDatum">Datum en start tijd</label>
                        <input type="datetime-local" class="form-control" name="selectDatum" id="selectDatum">
                    </div>
                    <div class="form-group">
                        <label for="selectTijd">Hoeveelheid uren</label>
                        <input type="number" class="form-control" name="selectTijd" id="selectTijd">
                    </div>
                    <div class="form-group">
                        <label for="omschrijving">Omschrijving</label>
                        <textarea name="omschrijving" id="omschrijving" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
