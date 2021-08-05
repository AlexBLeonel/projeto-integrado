<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderClient extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["product_id","room_id", "status", "note"];

    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
