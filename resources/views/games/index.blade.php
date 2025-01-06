@extends('layouts.app')

@section('content')
    <h2>All Games</h2>
    <a href="{{ route('games.create') }}" class="btn">Add New Game</a>
    <div class="grid-container">
        @foreach ($games as $game)
            <div class="grid-item">
                <h3>{{ $game->title }}</h3>
                <p>Developer: {{ $game->developer }}</p>
                <p>Genre: {{ $game->genre }}</p>
                <p>Release Year: {{ $game->release_year }}</p>
                <a href="{{ route('games.show', $game->id) }}" class="btn">View</a>
                <a href="{{ route('games.edit', $game->id) }}" class="btn">Edit</a>
                <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
