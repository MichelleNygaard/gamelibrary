@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Game</h2>
        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Game Title:</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="developer">Developer:</label>
                <input type="text" name="developer" id="developer" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre" required>
            </div>

            <div class="form-group">
                <label for="release_year">Release Year:</label>
                <input type="number" name="release_year" id="release_year" required>
            </div>

            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="url" name="image_url" id="image_url" placeholder="Enter image URL (optional)">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="image_upload">Upload Image:</label>--}}
{{--                <input type="file" name="image_upload" id="image_upload" accept="image/*">--}}
{{--            </div>--}}

            <button type="submit" class="btn">Add Game</button>
        </form>
    </div>
@endsection
