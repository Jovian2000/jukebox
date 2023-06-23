@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{asset('css/playlist-style.css')}}">
@endpush

@section('content')

<form method="POST" action="{{route('playlist.store')}}">
    @csrf
    <label>Vul een naam voor het playlist in</label>
    <input name="playlistName" type="text">
    <input type="submit" value="Send me">
</form>

@endsection
