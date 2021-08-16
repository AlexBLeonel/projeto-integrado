<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model {
    use HasFactory;

    protected $fillable = ["product", "description", "price"];

    public function orders() {
        return $this->belongsToMany(Order::class);
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

    public function getFormatedProductAttribute() {
        return $this->attributes['product'];
    }
}
