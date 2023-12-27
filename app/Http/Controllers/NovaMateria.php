<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Any;

class NovaMateria extends Controller
{
    #[Any('cadastrar_nova_materia')]
    public function cadastrarNovaMateria(Request $request)
    {

        if ($request->isMethod('POST')) {
            Materia::create($request->all());
            return redirect()->back();
        }

        return view("cadastrar_nova_materia");
    }
}
