<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Http\Requests\StoreSuperheroRequest;
use App\Http\Requests\UpdateSuperheroRequest;
use Illuminate\Support\Facades\Storage;

class SuperheroController extends Controller
{
    public function index()
    {
        $heroes = Superhero::all();
        return view('superheroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(StoreSuperheroRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('heroes', 'public');
        }

        Superhero::create($data);
        return redirect()->route('superheroes.index')->with('success', 'Herói cadastrado com sucesso!');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(UpdateSuperheroRequest $request, Superhero $superhero)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Apaga a imagem antiga se ela existir no storage
            if ($superhero->image && Storage::disk('public')->exists($superhero->image)) {
                Storage::disk('public')->delete($superhero->image);
            }
            $data['image'] = $request->file('image')->store('heroes', 'public');
        }

        $superhero->update($data);
        return redirect()->route('superheroes.index')->with('success', 'Herói atualizado com sucesso!');
    }

    public function destroy(Superhero $superhero)
    {
        // Apaga a imagem do herói antes de deletar o registro
        if ($superhero->image && Storage::disk('public')->exists($superhero->image)) {
            Storage::disk('public')->delete($superhero->image);
        }

        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Herói removido do catálogo!');
    }
}
