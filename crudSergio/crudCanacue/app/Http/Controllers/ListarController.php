<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = User::all();

        return view('auth.listar', ['usuarios' => $usuarios]);
    }

    public function mostrarFormularioActualizar($id)
    {
        $usuario = User::find($id);

        return view('auth.editar', ['usuario' => $usuario]);
    }

    public function actualizarUsuario(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'cedula' => 'required|min:10|max:10',
            'numero_telefono' => 'required|string|max:10',
            'direccion' => 'required|string|max:20',
        ]);

        $usuario = User::find($id);

        $usuario->update([
            'name' => $request->input('name'),
            'cedula' => $request->input('cedula'),
            'numero_telefono' => $request->input('numero_telefono'),
            'direccion' => $request->input('direccion'),
        ]);

        return redirect()->route('listar')->with('success', 'Usuario actualizado correctamente');
    }
    public function eliminar($id)
    {

        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('listar');
    }




}
