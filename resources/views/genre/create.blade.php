@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('genre.store')}}">
    @csrf
    <label>Vul een naam voor het genre in</label>
    <input name="genreName" type="text">
    <input type="submit" value="Send me">
</form>

@endsection