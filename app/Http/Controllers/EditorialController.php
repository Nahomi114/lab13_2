<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', compact('editoriales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('editoriales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Editorial::create($validated);

        return redirect()->route('editoriales.index')
            ->with('success', 'Editorial creada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editorial $editorial): View
    {
        return view('editoriales.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editorial $editorial): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $editorial->update($validated);

        return redirect()->route('editoriales.index')
            ->with('success', 'Editorial actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editorial $editorial): RedirectResponse
    {
        $editorial->delete();

        return redirect()->route('editoriales.index')
            ->with('success', 'Editorial eliminada exitosamente.');
    }
}
