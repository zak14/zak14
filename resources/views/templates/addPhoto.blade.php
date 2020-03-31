@extends('templates.index')

@section('content')
    <div class="container">
        <h1 class="text-center">Ajouter une photo</h1>
        <form action="{{route('photo.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Enregistrer</button>
        </form>
    </div>
@endsection