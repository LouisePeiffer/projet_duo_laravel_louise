@extends('layouts.index')

@section('content')
    <h1>Modifier le blog</h1>
    <a href="/admin">Retour sur la page Admin</a>
    <form method="POST" action="{{route('store.blog')}}">
        @csrf
        <label for="image">IMAGE</label>
        <input type="text" name="image">

        <br>

        <label for="titre">TITRE</label>
        <input type="text" name="titre">

        <br>

        <label for="texte">TEXTE</label>
        <input type="text" name="texte">

        <br>

        <button type="submit" class="btn btn-outline-success">Changer</button>
    </form>

    <div>
        @foreach ($varBlog as $blog)
            <div>
                {{$blog->image}}
            </div>
            <form method="POST" action="{{route('destroy.blog', $blog->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @endforeach
    </div>

@endsection