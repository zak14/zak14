@extends('templates/index')

@section('content')
    <h1 class="text-center">Photos</h1>
    <a href="{{route('photo.create')}}" class="btn btn-primary"> Ajouter une photo</a>
    <ul class="list-group">
        @foreach ($photos as $photo)
            <li class="list-group-item d-flex justify-content-between">
                {{$photo->name}}
                <img src="{{$photo->img_path}}" class="w-50" alt="">
                <p>{{$photo->description}}</p>
                <div>
                    <a href="{{route('photo.edit',$photo->id)}}" class="btn btn-primary">Update</a>
                    <form action="{{route('photo.destroy',$photo->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection