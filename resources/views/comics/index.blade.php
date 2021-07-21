@extends('layout.app')

@section('content')
<section class='container'>
    <h1 class='text-center mt-4'>All Comics</h1>

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>    
    @endif

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Series</th>
                <th colspan='3'>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->series}}</td>
                    <td >
                    <a href="{{ route('comics.show', $item->id)}}" class='btn btn-outline-success'>SHOW</a>
                    </td>
                    <td >
                        <a href="{{ route('comics.edit', $item->id)}}" class='btn btn-outline-warning'>EDIT</a>
                    </td>
                    <td >
                        <form action="{{ route('comics.destroy', $item->id)}}" method="POST" onSubmit="return confirm('Are you sure you want to delete {{$item->title}}?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class='btn btn-outline-danger' value='DELETE'>
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
    <div>
        {{$comics->links()}}
    </div>
</section>

    
@endsection