<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

/**
 * Class ActionController
 * @package App\Http\Controllers
 */
class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Action::paginate(10);

        return view('action.index', compact('actions'))
            ->with('i', (request()->input('page', 1) - 1) * $actions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = new Action();
        return view('action.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Action::$rules);

        $action = Action::create($request->all());

        return redirect()->route('actions.index')
            ->with('success', 'Action created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = Action::find($id);

        return view('action.show', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Action::find($id);

        return view('action.edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Action $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
        request()->validate(Action::$rules);

        $action->update($request->all());

        return redirect()->route('actions.index')
            ->with('success', 'Action updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $action = Action::find($id)->delete();

        return redirect()->route('actions.index')
            ->with('success', 'Action deleted successfully');
    }
}
