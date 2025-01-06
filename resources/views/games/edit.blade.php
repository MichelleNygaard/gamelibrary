@extends('layouts.app')

@section('content')
    <h2>Edit Game</h2>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $game->title }}" required>
        </div>
        <div>
            <label for="developer">Developer:</label>
            <input type="text" name="developer" id="developer" value="{{ $game->developer }}" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" value="{{ $game->genre }}" required>
        </div>
        <div>
            <label for="release_year">Release Year:</label>
            <input type="number" name="release_year" id="release_year" value="{{ $game->release_year }}" required>
        </div>
        <div>
            <button type="submit" class="btn">Update Game</button>
        </div>
    </form>
@endsection
