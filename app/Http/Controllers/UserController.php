<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return view('Usuarios.list', ['usuarios' => $usuarios]);
    }
}
