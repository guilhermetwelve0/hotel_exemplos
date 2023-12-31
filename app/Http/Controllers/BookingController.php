<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Reserva::orderBy('id', 'DESC')->get();
        return view('bookings.index', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reserva::create($request->all());

        return redirect()->route('bookings')->with('success', 'Reserva adicionanda com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        return view('bookings.show', compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        return view('bookings.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bookings = Reserva::findOrFail($id);

        $bookings->update($request->all());

        return redirect()->route('bookings')->with('success', 'Reserva atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bookings = Reserva::findOrFail($id);

        $bookings->delete();

        return redirect()->route('bookings')->with('success', 'Reserva deletada com sucesso');
    }
}
