<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["payments","status"];

    public function clients() {
        return $this->belongsToMany(Clients::class);
    }
}
