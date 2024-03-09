<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

/**
 * Class StatisticController
 * @package App\Http\Controllers
 */
class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = Statistic::paginate(10);

        return view('statistic.index', compact('statistics'))
            ->with('i', (request()->input('page', 1) - 1) * $statistics->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statistic = new Statistic();
        return view('statistic.create', compact('statistic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Statistic::$rules);

        $statistic = Statistic::create($request->all());

        return redirect()->route('statistics.index')
            ->with('success', 'Statistic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statistic = Statistic::find($id);

        return view('statistic.show', compact('statistic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statistic = Statistic::find($id);

        return view('statistic.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Statistic $statistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $statistic)
    {
        request()->validate(Statistic::$rules);

        $statistic->update($request->all());

        return redirect()->route('statistics.index')
            ->with('success', 'Statistic updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $statistic = Statistic::find($id)->delete();

        return redirect()->route('statistics.index')
            ->with('success', 'Statistic deleted successfully');
    }
}
