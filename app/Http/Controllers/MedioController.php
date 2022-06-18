<?php

namespace App\Http\Controllers;

use App\Medio;
use Illuminate\Http\Request;

/**
 * Class MedioController
 * @package App\Http\Controllers
 */
class MedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medios = Medio::paginate();

        return view('medio.index', compact('medios'))
            ->with('i', (request()->input('page', 1) - 1) * $medios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medio = new Medio();
        return view('medio.create', compact('medio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medio::$rules);

        $medio = Medio::create($request->all());

        return redirect()->route('medios.index')
            ->with('success', 'Medio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medio = Medio::find($id);

        return view('medio.show', compact('medio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medio = Medio::find($id);

        return view('medio.edit', compact('medio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medio $medio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medio $medio)
    {
        request()->validate(Medio::$rules);

        $medio->update($request->all());

        return redirect()->route('medios.index')
            ->with('success', 'Medio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medio = Medio::find($id)->delete();

        return redirect()->route('medios.index')
            ->with('success', 'Medio deleted successfully');
    }
}
