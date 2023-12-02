<?php

namespace App\Domain\UseCases\UserActor\CreateGroup;


class CreateGroupRequestModel
{

    public function __construct(private Array $attributes){}

    public function getRequestAttributes():array
    {
        return $this->attributes;
    }

    // public function getAttribute(string $attribute):array


}


