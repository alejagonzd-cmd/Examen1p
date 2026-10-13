<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Producto extends Model {
    use HasFactory;
    protected $fillable = ['categoria_id', 'nombre', 'descripcion', 'tipo_madera', 'precio', 'stock', 'estado'];
    public function categoria() { return $this->belongsTo(Categoria::class); }
    public function detallesPedido() { return $this->hasMany(PedidoDetalle::class); }
}
