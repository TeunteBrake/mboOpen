@extends('layouts.website')
@section('content')

<div class="container baanReserveren">
    <div class="row">
        <div class="col-md-12">
            <h1>Reserveer uw baan.</h1>
            @guest
                <p>Log eerst in om een baan te reserveren</p>
            @else

                <form action="/banen/reserveren/save" method="POST">
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
            @endguest


        </div>

    </div>
</div>

@endsection
