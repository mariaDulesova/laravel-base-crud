@extends('layout.app')

@section('content')
    {{-- Messagio nel caso di errore --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    {{-- Pagina da vedere --}}
    <h1 class='text-center mt-4'>Create New Comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                id="title" 
                placeholder="Please insert title here..." 
                name="title"
                value="{{old('title')}}"
            >
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                class="form-control @error('description') is-invalid @enderror" 
                id="description" 
                rows="5" 
                placeholder="Please insert description here..." 
                name="description">{{old('description')}}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input 
                type="text" 
                class="form-control @error('thumb') is-invalid @enderror" 
                id="thumb" 
                placeholder="Please insert thumb here..." 
                name="thumb"
                value="{{old('thumb')}}"
            >
            @error('thumb')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input 
                type="number" 
                step="0.01"
                class="form-control @error('price') is-invalid @enderror" 
                id="price" 
                placeholder="Please insert price here..." 
                name="price"
                value="{{old('price')}}"
            >
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input 
                type="text" 
                class="form-control @error('series') is-invalid @enderror" 
                id="series" 
                placeholder="Please insert series here..." 
                name="series"
                value="{{old('series')}}"
            >
            @error('series')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Sale Date</label>
            <input 
                type="date" 
                class="form-control @error('sale_date') is-invalid @enderror" 
                id="sale_date" 
                placeholder="Please insert sale date here..." name="sale_date"
                value="{{old('sale_date')}}"
            >
            @error('sale_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input 
                type="text" 
                class="form-control @error('type') is-invalid @enderror"
                id="type" 
                placeholder="Please insert type here..." 
                name="type"
                value="{{old('type')}}"
            >
            @error('type')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
       
        <button type="submit" class="btn btn-success">Save</button>
      </form>
    
@endsection