<?php

use App\Models\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::any('/responder/{mensagem}', function (Request $request, Mensagem $mensagem)
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
    });

    Route::get('/', function () {
        return redirect('dashboard');
    })->name('dashboard');


    Route::get('/dashboard', function () {

        $mensagens = Mensagem::get();
        return view('dashboard', compact('mensagens'));
    })->name('dashboard');
});
