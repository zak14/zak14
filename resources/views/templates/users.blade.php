@extends('templates/index')

@section('content')
    <h1 class="text-center">Users</h1>
    <a href="{{route('user.create')}}">Ajouter un user</a>
    <ul class="list-group">
         @foreach ($users as $user) 
            <li class="list-group-item d-flex justify-content-between">
                {{$user->name}}
                <div>
                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Update</a>
                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
         @endforeach 
</ul>
    
@endsection