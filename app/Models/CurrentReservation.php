<?php

namespace App\Models;

use App\Domain\Interfaces\EntitiesInterface\CurrentReservationEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentReservation extends Model implements CurrentReservationEntity
{
    use HasFactory;

    protected $table = "current_reservations";
    protected $primaryKey = "id";
    protected $fillable =
    [
        "fileID",
        "userID"
    ];
    public function getUserId(){}
    public function getFileId(){}

}
