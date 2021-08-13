<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["client_id", "room_id", "checkin", "checkout"];

    public function clients() {
        return $this->belongsToMany(Client::class);
    }

    public function rooms() {
        return $this->belongsToMany(Room::class);
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
