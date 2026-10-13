<?php
namespace App\Http\Controllers;
use App\Models\PedidoDetalle;
class PedidoDetalleController extends Controller {
    public function index() { dd(PedidoDetalle::with(['pedido', 'producto'])->get()); }
}
