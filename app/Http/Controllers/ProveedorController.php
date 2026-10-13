<?php
namespace App\Http\Controllers;
use App\Models\Proveedor;
class ProveedorController extends Controller {
    public function index() { dd(Proveedor::with('materiales')->get()); }
}
