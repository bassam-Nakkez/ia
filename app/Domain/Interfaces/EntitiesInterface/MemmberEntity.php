<?php

namespace App\Domain\Interfaces\EntitiesInterface;


interface MemmberEntity extends BaseEntity {
    public function getMemmberId();
    public function setMemmberId($memmberId);

    public function getGroupId();
    public function setGroupId($groupId);
    public function getUserId();
    public function setUserId($userId);
    public function getattributes():Array;

}
