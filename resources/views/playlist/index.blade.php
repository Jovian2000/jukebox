@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{asset('css/playlist-style.css')}}">
@endpush

@section('content')

<h1>Dit is een totaal overzicht van alle playlists</h1>
<ul>
@foreach($playlists as $playlist)
    <li>{{$playlist->name}} <a href="{{route('playlist.destroy', ['playlist' =>$playlist->id])}}">X</a></li>
@endforeach
</ul>

<a href="{{route('playlist.create')}}">Create a playlist</a>

@endsection