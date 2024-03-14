<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use Illuminate\Http\Request;

/**
 * Class RefereeController
 * @package App\Http\Controllers
 */
class RefereeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referees = Referee::where('status',1)->paginate(10);

        return view('referee.index', compact('referees'))
            ->with('i', (request()->input('page', 1) - 1) * $referees->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $referee = new Referee();
        return view('referee.create', compact('referee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Referee::$rules);

        $referee = Referee::create($request->all());

        return redirect()->route('referees.index')
            ->with('success', 'Arbitro creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $referee = Referee::find($id);

        return view('referee.show', compact('referee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referee = Referee::find($id);

        return view('referee.edit', compact('referee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Referee $referee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referee $referee)
    {
        request()->validate(Referee::$rules);

        $referee->update($request->all());

        return redirect()->route('referees.index')
            ->with('success', 'Arbitro actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $referee = Referee::find($id)->update(['status' => 0]);

        return redirect()->route('referees.index')
            ->with('success', 'Arbitro eliminado correctamente.');
    }
}
