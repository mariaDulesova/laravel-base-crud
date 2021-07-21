@extends('layout.app')

@section('content')
    <h3 class='text-center mt-4'>Edit {{ $comic->title }}</h3>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Please insert title here..." name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="5" placeholder="Please insert description here..." name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" placeholder="Please insert thumb here..." name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01"class="form-control" id="price" placeholder="Please insert price here..." name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Please insert series here..." name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="date" placeholder="Please insert sale date here..." name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Please insert type here..." name="type" value="{{$comic->type}}">
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-success">Save</button>
      </form>
    
@endsection