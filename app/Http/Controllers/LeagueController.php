<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\Models\League;
use App\Http\Resources\LeagueResource;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $leagues = League::paginate($perPage);

        return LeagueResource::collection($leagues);
    }

    public function store(LeagueRequest $request)
    {
        $league = League::create($request->validated());

        return new LeagueResource($league);
    }

    public function show($id)
    {
        $league = League::findOrFail($id);
        return new LeagueResource($league);
    }

    public function update(LeagueRequest $request, $id)
    {
        $league = League::findOrFail($id);
        $league->update($request->validated());

        // return a response with updated team
        return new LeagueResource($league);
    }

    public function destroy($id)
    {
        $league = League::findOrFail($id);
        $league->delete();

        return response()->json(['message' => 'League deleted successfully']);
    }
}
