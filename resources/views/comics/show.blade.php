@extends('layout.app')

@section('content')
    <div class="mt-4">
        <h3>{{$comic->title}}</h3>
    </div>
    <div class='row'>
        <div class='col-3'>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="my-5">
        </div>
        <div class='col-9'>
            <div class='my-5'>
                <h5>Series</h5>
                <p>{{$comic->series}}</p> 
                <h5>Description</h5>
                <p>{{$comic->description}}</p>
                <h5>Type</h5>
                <p>{{$comic->type}}</p>
                <h5>Price </h5>
                <p>{{$comic->price}} &euro;</p>
            </div>  
        </div>
    </div>
    <div>
        <a href="{{ route('comics.index')}}" class='btn btn-secondary btn-sm'>Back</a>
        <a href="{{ route('comics.edit', $comic->id)}}" class='btn btn-warning btn-sm'>Edit</a>
    </div>  
@endsection