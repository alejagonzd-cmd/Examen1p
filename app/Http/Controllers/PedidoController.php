<?php
namespace App\Http\Controllers;
use App\Models\Pedido;
class PedidoController extends Controller {
    public function index() { dd(Pedido::with(['cliente', 'empleado', 'detalles.producto'])->get()); }
}
