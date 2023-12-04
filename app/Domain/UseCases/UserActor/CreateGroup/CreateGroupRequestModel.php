<?php

namespace App\Domain\UseCases\UserActor\CreateGroup;


class CreateGroupRequestModel
{

    public function __construct(private array $attributes){}

    public function getName():String{
        return $this->attributes['name'];
    }


    public function getOwner():int{
        return $this->attributes['owner'];
    }
    // public function getAttribute(string $attribute):array


}


