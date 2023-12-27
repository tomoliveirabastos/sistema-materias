<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\MateriaUser;
use App\Models\Mensagem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\RouteAttributes\Attributes\Any;
use Spatie\RouteAttributes\Attributes\Get;
use Symfony\Component\HttpFoundation\Session\Session;

class InitController extends Controller
{
    private Session $session;
    public function __construct(Session $session)
    {
        parent::__construct($session);
        $this->session = $session;
    }

    #[Get("logout", middleware: 'guest')]
    public function logout()
    {
        $this->session->remove('user');

        return response('ok');
    }

    #[Any("/responder/{mensagem}", middleware: 'web')]
    public function responder(Request $request, Mensagem $mensagem)
    {

        if ($request->isMethod('POST')) {

            $mensagem->fill($request->all());
            $mensagem->status = "respondido";
            $mensagem->save();

            return redirect("/dashboard?msg=Mensagem respondida");
        }

        return view('responder', [
            'mensagem' => $mensagem
        ]);
    }


    #[Get("dashboard", middleware: 'web')]
    public function dashboard()
    {
        if (!$this->session->get('user')) {
            return redirect('/login');
        }

        $mensagens = Mensagem::get();

        return view('dashboard', compact('mensagens'));
    }

    #[Any("login", middleware: 'guest')]
    public function login(Request $request)
    {
        if ($request->isMethod("POST")) {

            $json = $request->all();

            $user = User::where('email', $json['email'])->first();

            if ($user && Hash::check($json['password'], $user->password)) {

                $this->session->set("user", $user);
                return redirect('/dashboard');
            }

            return redirect('/login?error=Falhou ao logar');
        }

        return view("welcome");
    }

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
