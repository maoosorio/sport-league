<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Team;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::where('status',1)->paginate(10);

        return view('team.index', compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * $teams->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();
        $league = League::get();
        return view('team.create', compact('team','league'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Team::$rules);

        $data = $request->all();

        if($request->has('team_photo_path')){
            $file = $request->file('team_photo_path');
            $destinationPath = 'images/teams/';
            $filename = time().'-'. $file->getClientOriginalName();
            $uploadSuccess = $request ->file('team_photo_path')->move($destinationPath,$filename);
            $data['team_photo_path'] = $destinationPath . $filename;
        }

        $team = Team::create($data);

        return redirect()->route('teams.index')
            ->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);

        return view('team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        $league = League::get();

        return view('team.edit', compact('team','league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate(Team::$rules);

        $team->update($request->all());

        return redirect()->route('teams.index')
            ->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $team = Team::find($id)->update(['status' => 0]);

        return redirect()->route('teams.index')
            ->with('success', 'Equipo eliminado correctamente.');
    }
}
