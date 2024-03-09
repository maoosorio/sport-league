<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

/**
 * Class LeagueController
 * @package App\Http\Controllers
 */
class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::paginate(10);

        return view('league.index', compact('leagues'))
            ->with('i', (request()->input('page', 1) - 1) * $leagues->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $league = new League();
        return view('league.create', compact('league'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(League::$rules);

        $league = League::create($request->all());

        return redirect()->route('leagues.index')
            ->with('success', 'League created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $league = League::find($id);

        return view('league.show', compact('league'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $league = League::find($id);

        return view('league.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  League $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        request()->validate(League::$rules);

        $league->update($request->all());

        return redirect()->route('leagues.index')
            ->with('success', 'League updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $league = League::find($id)->delete();

        return redirect()->route('leagues.index')
            ->with('success', 'League deleted successfully');
    }
}
