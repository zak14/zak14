@extends('templates/index')

@section('content')
    <h1 class="text-center">Albums</h1>
    @auth
        <p>Votre id est : {{Auth::user()->id}}</p>
    @endauth
    <table class="table">
        <thead>
            <tr>
                <th scope="row">Id Album</th>
                <td>Nom Album</td>
                <td>Description</td>
                <td>Id User</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->album_name}}</td>
                    <td>{{$album->description}}</td>
                    <td>{{$album->user_id}}</td>
                    <td>
                        <a href="/albums/{{$album->id}}/edit" class="btn btn-primary">Update</a>
                        <a href="/albums/{{$album->id}}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection