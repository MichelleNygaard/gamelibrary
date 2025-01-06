@extends('layouts.app')

@section('content')
    <h2>Add New Game</h2>
    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="developer">Developer:</label>
            <input type="text" name="developer" id="developer" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" required>
        </div>
        <div>
            <label for="release_year">Release Year:</label>
            <input type="number" name="release_year" id="release_year" required>
        </div>
        <div>
            <button type="submit" class="btn">Add Game</button>
        </div>
    </form>
@endsection
