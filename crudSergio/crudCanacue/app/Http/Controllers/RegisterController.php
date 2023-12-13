<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        //dd($request->get('name'));



        $this->validate($request, [
            'name'=>'required | max:30',
            'cedula'=>'required|min:10|int',
            'numero_telefono' =>'required | min:9',
            'direccion' =>'required| max:13'
        ]);

        User::create([

            'name' => $request->name,
            'cedula' => $request->cedula,
            'numero_telefono' => $request->numero_telefono,
            'direccion' => $request->direccion
        ]);

        //Redireccionar
        return redirect('listar');


    }


}
