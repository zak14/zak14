@extends('templates.index')

@section('content')
    <h1 class="text-center">Ajout User</h1>

  <form action="{{route('user.store')}}" method="POST">
        @csrf
        
        <div class="form-group">
          <label for="">Name</label>
        <input type="text" name="user_name" id="" class="form-control" placeholder="Name" value="" aria-describedby="helpId">
          
        </div>
        
        <div class="form-group">
          <label for="">E-mail</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
        </div>

         <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop