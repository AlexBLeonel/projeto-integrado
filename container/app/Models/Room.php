<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model {
    use HasFactory;

    protected $fillable = ["description", "number", "status"];

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
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

    public function getFormatedStatusAttribute() {
        return $this->attributes['status'] == true ? "Ocupado" : "Disponível";
    }

    public function getFormatedNumberAttribute() {
        return $this->attributes['number'];
    }

    public function getClientAttribute() {
        return Client::findOrFail($this->attributes['name']);
    }
}
