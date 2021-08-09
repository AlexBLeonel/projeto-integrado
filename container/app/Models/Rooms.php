<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rooms extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["description", "number"];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function bookings() {
        return $this->belongsToMany(Booking::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }
}
