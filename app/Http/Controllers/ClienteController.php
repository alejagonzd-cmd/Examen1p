<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
class ClienteController extends Controller {
    public function index() { dd(Cliente::with('pedidos')->get()); }
}
