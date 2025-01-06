<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('game.index', compact('games'));
    }

    public function create() {
        return view('game.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'developer' => 'required',
            'genre' => 'required',
            'release_year' => 'required|integer',
        ]);

        Game::create($request->all());
        return redirect()->route('games.index')->with('success', 'Game added successfully.');
    }

    public function show(Game $game) {
        return view('game.show', compact('game'));
    }

    public function edit(Game $game) {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, Game $game) {
        $request->validate([
            'title' => 'required',
            'developer' => 'required',
            'genre' => 'required',
            'release_year' => 'required|integer',
        ]);

        $game->update($request->all());
        return redirect()->route('games.index')->with('success', 'Game updated successfully.');
    }

    public function destroy(Game $game) {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}
