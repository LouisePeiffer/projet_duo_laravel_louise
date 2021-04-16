@extends('layouts.index')

@section('content')
    <h2>Bienvenue sur la page Admin, champion!</h2>
    <a href="{{route('create.blog')}}"><button class="btn btn-success">Modifier le Blog</button></a>
    <a href="{{route('create.portfolio')}}"><button class="btn btn-success">Modifier le Portfolio</button></a>
@endsection
