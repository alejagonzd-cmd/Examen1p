<?php
namespace App\Http\Controllers;
use App\Models\Material;
class MaterialController extends Controller {
    public function index() { dd(Material::with('proveedores')->get()); }
}
