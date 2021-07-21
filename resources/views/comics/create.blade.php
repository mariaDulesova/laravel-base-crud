@extends('layout.app')

@section('content')
    <h1 class='text-center mt-4'>Create New Comic</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Please insert title here..." name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="5" placeholder="Please insert description here..." name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" placeholder="Please insert thumb here..." name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01"class="form-control" id="price" placeholder="Please insert price here..." name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Please insert series here..." name="series">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="date" placeholder="Please insert sale date here..." name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Please insert type here..." name="type">
        </div>
       
        <button type="submit" class="btn btn-success">Save</button>
      </form>
    
@endsection