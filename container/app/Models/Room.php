<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model {
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

    public function getFormatedCreatedAttribute() {
        return date("d/m/Y H:i:s", strtotime($this->attributes['created_at']));
    }

    public function getFormatedUpdatedAttribute() {
        return date("d/m/Y H:i:s", strtotime($this->attributes['updated_at']));
    }

    public function getFormatedDeletedAttribute() {
        return date("d/m/Y H:i:s", strtotime($this->attributes['deleted_at']));
    }
}