<?php
// app/Http/Controllers/TeamController.php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Resources\TeamResource;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $teams = Team::paginate($perPage);

        return TeamResource::collection($teams);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team = Team::create($data);

        return new TeamResource($team);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return new TeamResource($team);
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team->update($data);

        return new TeamResource($team);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return response()->json(['message' => 'Team deleted successfully']);
    }
}
