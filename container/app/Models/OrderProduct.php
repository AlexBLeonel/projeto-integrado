<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model {
    use HasFactory;

    protected $table = 'order_product';
    protected $fillable = ['order_id', 'product_id', 'status'];

    public function orders() {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}