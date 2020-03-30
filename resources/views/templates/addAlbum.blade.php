@extends('templates.index')

@section('content')
    <h1 class="text-center">Ajout Album</h1>

    <form action="/storeAlbum" method="POST">
        
        @csrf
        
        <div class="form-group">
          <label for="">Name</label>
        <input type="text" name="album_name" id="" class="form-control" placeholder="Name" value="" aria-describedby="helpId">
          
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" name="description" id="" class="form-control" aria-describedby="helpId">
            </textarea>
            
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

 


@stop