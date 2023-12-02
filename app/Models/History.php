<?php

namespace App\Models;

use App\Domain\Interfaces\EntitiesInterface\HistoryEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model implements HistoryEntity
{
    use HasFactory;
    protected $table = "histories";
    protected $primaryKey = "id";
    protected $fillable =
    [
        "fileID",
        "userID",
        "booking_at",
        "canceled_at"
    ];

    public function getId():int { return $this->attributes['id'];}
    public function getBookingDate(){ return $this->attributes['booking_at'];}
    public function getCanceleDate(){ return $this->attributes['canceled_at'];}
    public function getUserID(){ return $this->attributes['userID'];}
    public function getFileID(){ return $this->attributes['fileID'];}
}
