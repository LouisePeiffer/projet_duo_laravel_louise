@extends('layouts.index')

@section('content')
    <h1>Modifier le portfolio</h1>
    <a href="/admin">Retour sur la page Admin</a>
    <form method="POST" action="{{route('store.portfolio')}}">
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
        @foreach ($varPortfolio as $port)
            <div>
                {{$port->image}}
            </div>
            <form method="POST" action="{{route('destroy.portfolio', $port->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @endforeach
    </div>
@endsection