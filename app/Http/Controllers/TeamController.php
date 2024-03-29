<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamStoreRequest;
use App\Http\Requests\TeamUpateRequest;
use App\Models\Team;
use App\Http\Resources\TeamResource;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $teams = Team::paginate($perPage);

        return TeamResource::collection($teams);
    }

    public function store(TeamStoreRequest $request)
    {
        $team = Team::create($request->validated());

        return (new TeamResource($team))->additional(['message' => 'Team created successfully']);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return new TeamResource($team);
    }

    public function update(TeamUpateRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->update($request->validated());

        // return a response with updated team
        return (new TeamResource($team))->additional(['message' => 'Team updated successfully']);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return response()->json(['message' => 'Team deleted successfully']);
    }
}
