<?php

namespace App\Domain\Interfaces\EntitiesInterface;

use App\Models\EmailValueObject;
use App\Models\HashedPasswordValueObject;
use App\Models\PasswordValueObject;

interface UserEntity extends BaseEntity
{
    public function getName(): string;

    // public function getEmail(): EmailValueObject;

    // public function getPassword(): HashedPasswordValueObject;
    // public function getattributes():Array;

}
