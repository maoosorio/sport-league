<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class FieldController
 * @package App\Http\Controllers
 */
class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::where('status',1)->paginate(10);

        return view('field.index', compact('fields'))
            ->with('i', (request()->input('page', 1) - 1) * $fields->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $field = new Field();
        return view('field.create', compact('field'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Field::$rules);

        $data = $request->all();

        if($request->has('field_photo_path')){
            $file = $request->file('field_photo_path');
            $destinationPath = 'images/fields/';
            $filename = time().'-'. $file->getClientOriginalName();
            $uploadSuccess = $request ->file('field_photo_path')->move($destinationPath,$filename);
            $data['field_photo_path'] = $destinationPath . $filename;
        }

        $field = Field::create($data);

        return redirect()->route('fields.index')
            ->with('success', 'Campo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $field = Field::find($id);

        return view('field.show', compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = Field::find($id);

        return view('field.edit', compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Field $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        request()->validate(Field::$rules);

        $field->update($request->all());

        return redirect()->route('fields.index')
            ->with('success', 'Campo actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $field = Field::find($id)->update(['status' => 0]);

        return redirect()->route('fields.index')
            ->with('success', 'Campo eliminado correctamente.');
    }
}
