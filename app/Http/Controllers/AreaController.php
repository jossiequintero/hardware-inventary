<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Facultad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $areas = Area::all()->take(30);
        $areas = Area::query()->latest()->limit(15)->get();
        foreach ($areas as $area) {
            $area->facultad = Facultad::find($area->facultad_id);
        }
        $facultades = Facultad::all();
        return view('layout-area.inicio', compact('areas','facultades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultades =  facultad::all();
        return view('layout-area.nuevo', compact('facultades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar
        Area::create([
            'nombre'=> $request->nombre_area,
            'descripcion'=>$request->descripcion,
            'facultad_id'=>$request->facultadselected,
        ]);
        return redirect()->back()->with('estado','Se guardó con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::find($id);
        $facultades = Facultad::all();
        return view('layout-area.actualizar', compact('area', 'facultades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $area = Area::find($id);
        $area->nombre = $request->get('nombre_area');
        $area->save();
        return back()->with('estado','Se actualizó con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
        return back()->with("estado","Se eliminó con exito");
    }
}
