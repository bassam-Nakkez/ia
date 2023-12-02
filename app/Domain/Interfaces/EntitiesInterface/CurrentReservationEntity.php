<?php
namespace App\Domain\Interfaces\EntitiesInterface;


interface CurrentReservationEntity extends BaseEntity {

    public function getUserId();
    public function getFileId();
    public function getattributes():Array;

}
