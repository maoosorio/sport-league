<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Tournament;
use Illuminate\Http\Request;

/**
 * Class TournamentController
 * @package App\Http\Controllers
 */
class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::where('status',1)->paginate(10);

        return view('tournament.index', compact('tournaments'))
            ->with('i', (request()->input('page', 1) - 1) * $tournaments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournament = new Tournament();
        $league = League::get();
        return view('tournament.create', compact('tournament','league'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tournament::$rules);

        $tournament = Tournament::create($request->all());

        return redirect()->route('tournaments.index')
            ->with('success', 'Torneo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournament = Tournament::find($id);

        return view('tournament.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournament::find($id);
        $league = League::get();

        return view('tournament.edit', compact('tournament','league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tournament $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        request()->validate(Tournament::$rules);

        $tournament->update($request->all());

        return redirect()->route('tournaments.index')
            ->with('success', 'Torneo actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tournament = Tournament::find($id)->update(['status' => 0]);

        return redirect()->route('tournaments.index')
            ->with('success', 'Torneo eliminado correctamente');
    }
}
