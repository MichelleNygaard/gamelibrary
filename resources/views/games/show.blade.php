@extends('layouts.app')

@section('content')
    <h2>{{ $game->title }}</h2>
    <p><strong>Developer:</strong> {{ $game->developer }}</p>
    <p><strong>Genre:</strong> {{ $game->genre }}</p>
    <p><strong>Release Year:</strong> {{ $game->release_year }}</p>
    <p><strong>Description:</strong> {{ $game->description }}</p>
    <a href="{{ route('games.edit', $game->id) }}" class="btn">Edit</a>
    <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Delete</button>
    </form>
    <a href="{{ route('games.index') }}" class="btn">Back to Library</a>
@endsection
