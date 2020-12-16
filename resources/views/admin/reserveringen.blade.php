@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="btn-group">
                    <a href="/admin/reserveringen/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voeg reservering toe</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Baan</th>
                        <th scope="col">Lid</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Aantal uur</th>
                        <th scope="col">Omschrijving</th>
                        <th scope="col">Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reserveringen as $reservering)
                        <tr>
                            <th scope="row">{{$reservering->id}}</th>
                            <td>{{$reservering->baan->soort}}</td>
                            <td>{{$reservering->lid->name}}</td>
                            <td>{{$reservering->datum}}</td>
                            <td>{{$reservering->tijdsDuur}}</td>
                            <td>{{$reservering->omschrijving}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/admin/reserveringen/{{$reservering->id}}/edit" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Aanpassen</a>
                                    <a href="/admin/reserveringen/{{$reservering->id}}/delete" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Verwijderen</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
