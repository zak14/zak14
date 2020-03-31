@extends('templates.index')

@section('content')
    <div class="container">
        <h1 class="text-center">Editer la photo</h1>
        <form action="{{route('photo.update',$photo->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{$photo->name}}">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control" value="{{$photo->img_path}}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" value="{{$photo->description}}">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Enregistrer</button>
        </form>
    </div>
@endsection