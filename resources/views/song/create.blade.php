@extends('layouts.master')

@section('content')

<h1>Add a Song</h1>
<form method="POST" action="{{route('song.store')}}">
    @csrf
    <label>Vul een naam voor het liedje in</label>
    <input name="name" type="text">
    <br>
    <label>Vul een author voor het liedje in</label>
    <input name="author" type="text">
    <br>
    <select name="genre_id">
        @foreach($genres as $genre)
            <option value='{{$genre->id}}'>{{$genre->name}}</option>
        @endforeach
    </select>
    <br>
    <label>Vul een releasedate voor het liedje in</label>
    <input name="releasedate" type="date">
    <br>
    <label>Vul een duratie voor het liedje in</label>
    <input name="duration" type="number">
    <br>

    <input type="submit" value="Send me!">
</form>

@endsection