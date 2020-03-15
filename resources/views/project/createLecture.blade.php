@extends('layouts.app')

@section('content')
    <div class="container">
        <div class=" col-md-6 mx-auto"> 
            <h1>Prideti pamoka:</h1>
            <form action="{{route('lectures.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Pamokos pavadinimas">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="desc" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-info" type="submit" value="Irasyti">
                </div>
            </form>
        </div>
    </div>
@endsection