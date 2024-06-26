<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::where('status',1)->paginate(10);

        return view('player.index', compact('players'))
            ->with('i', (request()->input('page', 1) - 1) * $players->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $player = new Player();
        return view('player.create', compact('player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Player::$rules);

        $data = $request->all();

        if($request->has('player_photo_path')){
            $file = $request->file('player_photo_path');
            $destinationPath = 'images/players/';
            $filename = time().'-'. $file->getClientOriginalName();
            $uploadSuccess = $request ->file('player_photo_path')->move($destinationPath,$filename);
            $data['player_photo_path'] = $destinationPath . $filename;
        }

        $player = Player::create($data);

        return redirect()->route('players.index')
            ->with('success', 'Jugador creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);

        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);

        return view('player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        request()->validate(Player::$rules);

        $player->update($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Jugador actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $player = Player::find($id)->update(['status' => 0]);

        return redirect()->route('players.index')
            ->with('success', 'Jugador eliminado correctamente.');
    }
}
