<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\MateriaUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\RouteAttributes\Attributes\Any;

class InitController extends Controller
{
    #[Any("cadastrar", middleware: 'guest')]
    public function cadastrar(Request $request)
    {
        if ($request->isMethod('POST')) {
            $json = $request->all();

            $json['password'] = Hash::make($request->get('password'));
            $user = User::create($json);

            MateriaUser::create([
                'user_id' => $user->id,
                'materia_id' => $json['materia_id']
            ]);

            return redirect("/login");
        }

        $materias = Materia::get();

        return view('cadastrar', compact('materias'));
    }
}
