<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::paginate();
        return view('cliente.index', compact('clientes'))
        ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    public function __invoke()
    {
        return view('auth.login');
    }

}
