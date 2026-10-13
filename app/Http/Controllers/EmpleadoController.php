<?php
namespace App\Http\Controllers;
use App\Models\Empleado;
class EmpleadoController extends Controller {
    public function index() { dd(Empleado::with('pedidos')->get()); }
}
