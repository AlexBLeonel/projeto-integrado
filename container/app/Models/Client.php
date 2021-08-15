<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "phone", "email", "birth", "cpf"];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function orderClient() {
        return $this->belongsToMany(OrderClient::class);
    }

    public function getFormatedBirthAttribute() {
        return date("d/m/Y", strtotime($this->attributes['birth']));
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

    public function getFormatedNameAttribute() {
        return ucwords(mb_strtolower($this->attributes['name'], 'UTF-8'));
    }
}
