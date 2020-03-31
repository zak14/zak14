@extends('templates/index')

@section('content')
    <h1 class="text-center">Photos</h1>
    <a href="{{route('photo.create')}}" class="btn btn-primary"> Ajouter une photo</a>
    <ul class="list-group">
        @foreach ($photos as $photo)
            <li class="list-group-item d-flex justify-content-between">
                {{$photo->name}}
                {{-- Si photo->img_path commence par https, j'affiche les lorem --}}
                @if (substr($photo->img_path,0,5) === "https")
                    <img src="{{$photo->img_path}}" alt="">
                @else
                    <img src="{{asset('storage/'.$photo->img_path)}}" class="w-50" alt="">
                @endif
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