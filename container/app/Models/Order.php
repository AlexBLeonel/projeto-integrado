<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["product_id", "room_id", "status", "note"];
    
    public function products() {
        return $this->hasMany(Product::class);
    }

    public function rooms() {
        return $this->hasMany(Product::class);
    }

    public function orderClient() {
        return $this->belongsToMany(OrderClient::class);
    }
}
