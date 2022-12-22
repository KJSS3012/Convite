<?php

namespace App\Http\Controllers;

use App\Models\Convidado;
use App\Models\Presente;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\PresencaConfirmada;

class Presentes extends Controller
{
    public function store(Request $request)
    {
        //Criar e salvar as informações dos convidados
        $convidado = new Convidado;
        $convidado->firstname = $request->post('firstname');
        $convidado->lastname = $request->post('lastname');
        $convidado->telephone = $request->post('telephone');
        $convidado->con_pre_id = $request->post('gift');
        $convidado->save();

        $presente = Presente::find($request->post('gift'));
        $presente->valid = 1;
        $presente->save();
        $user = User::find(1);
        $user2 = User::find(2);
        $user->notify(new PresencaConfirmada($convidado,$presente));
        $user2->notify(new PresencaConfirmada($convidado,$presente));
        return redirect('/');
    }
}
