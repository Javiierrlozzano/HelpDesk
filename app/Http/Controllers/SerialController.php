<?php

namespace App\Http\Controllers;

use App\Serial;
use Illuminate\Http\Request;

/**
 * Class SerialController
 * @package App\Http\Controllers
 */
class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serials = Serial::paginate();

        return view('serial.index', compact('serials'))
            ->with('i', (request()->input('page', 1) - 1) * $serials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serial = new Serial();
        return view('serial.create', compact('serial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Serial::$rules);

        $serial = Serial::create($request->all());

        return redirect()->route('serials.index')
            ->with('success', 'Serial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serial = Serial::find($id);

        return view('serial.show', compact('serial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serial = Serial::find($id);

        return view('serial.edit', compact('serial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Serial $serial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serial $serial)
    {
        request()->validate(Serial::$rules);

        $serial->update($request->all());

        return redirect()->route('serials.index')
            ->with('success', 'Serial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $serial = Serial::find($id)->delete();

        return redirect()->route('serials.index')
            ->with('success', 'Serial deleted successfully');
    }
}
