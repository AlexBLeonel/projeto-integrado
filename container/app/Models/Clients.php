<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clients extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name","phone","email","birth","cpf"];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    // agr sim
    public function orderClient() {
        return $this->belongsToMany(OrderClient::class);
    }
}
