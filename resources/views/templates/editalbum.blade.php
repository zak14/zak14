@extends('templates.index')

@section('content')
    <h1 class="text-center">Edit Album</h1>

    <form action="/albums/{{$album->id}}/update" method="POST">
        
        @csrf
        
        <div class="form-group">
          <label for="">Name</label>
        <input type="text" name="album_name" id="" class="form-control" placeholder="Name" value="{{$album->album_name}}" aria-describedby="helpId">
          
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" name="description" id="" class="form-control" aria-describedby="helpId">{{$album->description}}
            </textarea>
            
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

 


@stop