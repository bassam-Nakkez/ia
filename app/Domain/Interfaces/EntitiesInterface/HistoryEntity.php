<?php
namespace App\Domain\Interfaces\EntitiesInterface;


interface HistoryEntity extends BaseEntity {
    public function getId(): int;
    public function getBookingDate();
    public function getCanceleDate();
    public function getUserID();
    public function getFileID();
    public function getattributes():Array;


}
