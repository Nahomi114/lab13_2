<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use App\Models\Editorial;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $libros = Libro::with(['autor', 'editorial'])->get();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        return view('libros.create', compact('autores', 'editoriales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'año' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'autor_id' => 'required|exists:autores,id',
            'editorial_id' => 'required|exists:editoriales,id',
        ]);

        Libro::create($validated);

        return redirect()->route('libros.index')
            ->with('success', 'Libro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro): View
    {
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro): View
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        return view('libros.edit', compact('libro', 'autores', 'editoriales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'año' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'autor_id' => 'required|exists:autores,id',
            'editorial_id' => 'required|exists:editoriales,id',
        ]);

        $libro->update($validated);

        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro): RedirectResponse
    {
        $libro->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}
