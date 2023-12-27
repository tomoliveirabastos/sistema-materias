<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Mensagem;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Any;

class MensagemController extends Controller
{
    #[Any("nova_mensagem", middleware: 'guest')]
    public function novaMensagem(Request $request)
    {
        if ($request->isMethod('POST')) {
            $arr = $request->all();
            $arr['status'] = 'pendente';

            $mensagem = Mensagem::create($arr);
            return redirect()->back();
        }

        $users = User::get();
        $materias = Materia::get();

        return view("nova_mensagem", compact('users', 'materias'));
    }
}
