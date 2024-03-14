<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::where('status',1)->paginate(10);

        return view('admin.index', compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * $admins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = new Admin();

        return view('admin.create', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Admin::$rules);

        $data = $request->all();

        if($request->has('admin_photo_path')){
            $file = $request->file('admin_photo_path');
            $destinationPath = 'images/admins/';
            $filename = time().'-'. $file->getClientOriginalName();
            $uploadSuccess = $request ->file('admin_photo_path')->move($destinationPath,$filename);
            $data['admin_photo_path'] = $destinationPath . $filename;
        }
        
        $admin = Admin::create($data);

        return redirect()->route('admins.index')
            ->with('success', 'Administrador creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);

        return view('admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        request()->validate(Admin::$rules);

        $admin->update($request->all());

        return redirect()->route('admins.index')
            ->with('success', 'Administrador actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admin = Admin::find($id)->update(['status' => 0]);

        return redirect()->route('admins.index')
            ->with('success', 'Administrador eliminado correctamente');
    }
}
