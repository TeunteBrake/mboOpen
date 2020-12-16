@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="/admin/banen/save" >
                    <div class="form-group">
                        <label for="soortBaan">Soort baan</label>
                        <input type="text" class="form-control" id="soortBaan" name="soortBaan">
                    </div>
                    <button type="submit" class="btn btn-primary">Voeg baan toe</button>
                </form>
            </div>
        </div>
    </div>
@endsection
