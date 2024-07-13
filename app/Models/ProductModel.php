<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductModel
 *
 * Modelo que representa los productos en la base de datos.
 */
class ProductModel extends Model
{
    use HasFactory;

    /**
     * @var string La tabla asociada al modelo.
     */
    protected $table = 'products';

    /**
     * @var array Los atributos que no son asignables en masa.
     */
    protected $guarded = [];

    /**
     * Relación muchos a muchos con el modelo OrderModel.
     *
     * Un producto puede estar asociado con múltiples órdenes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(OrderModel::class, 'order_product', 'product_id', 'order_id');
    }

    public function category(){
        return $this->belongsTo(CategoryModel::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'product_id');
    }
}
