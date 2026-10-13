<?php
namespace App\Http\Controllers;
use App\Models\Producto;
class ProductoController extends Controller {
    public function index() { dd(Producto::with('categoria')->get()); }
}
