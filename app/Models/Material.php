<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Material extends Model {
    use HasFactory;
    protected $table = 'materiales';
    protected $fillable = ['proveedores_id', 'nombre', 'descripcion', 'unidad_medida', 'costo_unitario'];
    public function proveedor() { return $this->belongsTo(Proveedor::class); }
}
