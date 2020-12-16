@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="/admin/banen/{{$baan->id}}/update" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="soortBaan">Soort baan</label>
                        <input type="text" class="form-control" id="soortBaan" name="soort" value="{{$baan->soort}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Pas baan aan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
