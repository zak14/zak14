@extends('templates/index')

@section('content')
    <h1 class="text-center">Albums</h1>
    <ul class="list-group">
        @foreach ($albums as $album)
            {{-- //$album === $albums[i] --}}
            <li class="list-group-item d-flex justify-content-between">
                {{$album->album_name}}
            <div>
                <a href="/albums/{{$album->id}}/edit" class="btn btn-primary">Update</a>
                <a href="/albums/{{$album->id}}/delete" class="btn btn-danger">Delete</a>
            </div>
            </li>
        @endforeach
</ul>
    
@endsection