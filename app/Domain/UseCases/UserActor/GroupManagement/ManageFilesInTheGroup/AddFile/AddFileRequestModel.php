<?php

namespace App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile;


class AddFileRequestModel
{

    public function __construct(
        private Array $attributes
    ){}

    public function getRequestAttributes():array
    {
        return $this->attributes;
    }




}


