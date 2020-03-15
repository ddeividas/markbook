@extends('layouts.app')

@section('content')
    <div class="container">
        <div class=" col-md-6 mx-auto"> 
            <h1>Rasyti pazymi:</h1>
            <form action="{{route('grades.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <select name="student" class="custom-select" id="inputGroupSelect01">
                        <option disabled selected>Pasirinkite studenta...</option>
                            @foreach ($student as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->surname}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="lecture" class="custom-select" id="inputGroupSelect01">
                        <option disabled selected>Pasirinkite pamoka...</option>
                            @foreach ($lecture as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="grade" placeholder="Irasykite pazymi">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-info" type="submit" value="Ivertinti">
                </div>
            </form>
        </div>
    </div>
@endsection