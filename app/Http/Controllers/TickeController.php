<?php

namespace App\Http\Controllers;

use App\Ticke;
use Illuminate\Http\Request;

/**
 * Class TickeController
 * @package App\Http\Controllers
 */
class TickeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickes = Ticke::paginate();

        return view('ticke.index', compact('tickes'))
            ->with('i', (request()->input('page', 1) - 1) * $tickes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticke = new Ticke();
        return view('ticke.create', compact('ticke'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ticke::$rules);

        $ticke = Ticke::create($request->all());

        return redirect()->route('tickes.index')
            ->with('success', 'Ticke created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticke = Ticke::find($id);

        return view('ticke.show', compact('ticke'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticke = Ticke::find($id);

        return view('ticke.edit', compact('ticke'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ticke $ticke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticke $ticke)
    {
        request()->validate(Ticke::$rules);

        $ticke->update($request->all());

        return redirect()->route('tickes.index')
            ->with('success', 'Ticke updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ticke = Ticke::find($id)->delete();

        return redirect()->route('tickes.index')
            ->with('success', 'Ticke deleted successfully');
    }
}
