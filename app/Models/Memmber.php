<?php

namespace App\Models;

use App\Domain\Interfaces\EntitiesInterface\MemmberEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memmber extends Model implements MemmberEntity
{
    use HasFactory;

    protected $table = "memmbers";
    protected $primaryKey = "id";
    protected $fillable =
    [
        "groupID",
        "userID"
    ];

    public function getMemmberId(){}
    public function setMemmberId($memmberId){}

    public function getGroupId(){}
    public function setGroupId($groupId){}
    public function getUserId(){}
    public function setUserId($userId){}

}
