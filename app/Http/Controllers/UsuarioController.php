<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UsuarioController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mostrarNome(Request $request)
    {
      return view('usuario', ['nome' => $request->nome]);
    }
}
