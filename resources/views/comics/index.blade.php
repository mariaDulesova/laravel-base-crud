@extends('layout.app')

@section('content')
<section class='container'>
    <h1 class='text-center mt-4'>All Comics</h1>

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
                        <a href="#" class='btn btn-outline-danger'>DELETE</a>
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