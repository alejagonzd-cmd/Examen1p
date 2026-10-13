<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pedido extends Model {
    use HasFactory;
    protected $fillable = ['cliente_id', 'empleado_id', 'fecha_pedido', 'fecha_entrega', 'estado', 'total'];
    protected $casts = ['fecha_pedido' => 'date', 'fecha_entrega' => 'date'];
    public function cliente() { return $this->belongsTo(Cliente::class); }
    public function empleado() { return $this->belongsTo(Empleado::class); }
    public function detalles() { return $this->hasMany(PedidoDetalle::class); }
}
