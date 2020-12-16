@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="btn-group">
                    <a href="/admin/banen/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voeg baan toe</a>
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
                        <th scope="col">Soort</th>
                        <th scope="col">Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banen as $baan)
                        <tr>
                            <th scope="row">{{$baan->id}}</th>
                            <td>{{$baan->soort}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/admin/banen/{{$baan->id}}/edit" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Aanpassen</a>
                                    <a href="/admin/banen/{{$baan->id}}/delete" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Verwijderen</a>
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
