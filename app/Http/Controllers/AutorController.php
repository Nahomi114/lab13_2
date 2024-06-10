<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Autor::create($validated);

        return redirect()->route('autores.index')
            ->with('success', 'Autor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor): View
    {
        return view('autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autore): View
    {
        return view('autores.edit', compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autore): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $autore->update($validated);

        return redirect()->route('autores.index')
            ->with('success', 'Autor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor): RedirectResponse
    {
        $autor->delete();

        return redirect()->route('autores.index')
            ->with('success', 'Autor eliminado exitosamente.');
    }
}
