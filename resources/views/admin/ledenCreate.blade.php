@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="/admin/leden/save" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" class="form-control" id="naam" name="naam">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="wachtwoord">Wachtwoord</label>
                        <input type="password" class="form-control" id="wachtwoord" name="wachtwoord">
                    </div>
                    <button type="submit" class="btn btn-primary">Voeg lid toe</button>
                </form>
            </div>
        </div>
    </div>
@endsection
