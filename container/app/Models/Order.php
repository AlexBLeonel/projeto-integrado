<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    
class Order extends Model {
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = ["product_id", "room_id", "status", "note"];
    
    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function rooms() {
        return $this->belongsTo(Room::class);
    }

    public function orderClient() {
        return $this->belongsToMany(OrderClient::class);
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

    public function getFormatedNotesAttribute() {
        if($this->attributes['notes'] == "")  {
            return "Sem Observações.";
        } else {
            return $this->attributes['notes'];
        }
    }

    public function getRoomAttribute() {
        return Room::findOrFail($this->attributes['room_id']);
    }

    public function getFormatedStatusAttribute() {
        return $this->attributes['status'] == true ? "Finalizado" : "Em andamento";
    }
}