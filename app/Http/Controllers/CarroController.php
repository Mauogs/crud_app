<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('carros.index', [
            'carros' => Carro::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarroRequest $request): RedirectResponse
    {
        Carro::create($request->validated());

        return redirect()->route('carros.index')
            ->withSuccess('Novo carro adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro): View
    {
        return view('carros.show', compact('carro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carro $carro): View
    {
        return view('carros.edit', compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarroRequest $request, Carro $carro): RedirectResponse
    {
        $carro->update($request->validated());

        return redirect()->back()
            ->withSuccess('Carro atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carro $carro): RedirectResponse
    {
        $carro->delete();

        return redirect()->route('carros.index')
            ->withSuccess('Carro excluído com sucesso.');
    }
}