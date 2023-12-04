<?php

namespace App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile;


class AddFileRequestModel
{

    public function __construct(
        private array $attributes
    ){}


    public function getContent():String
    {
        return $this->attributes['content'];
    }


    public function getFileName():String
    {
        return $this->attributes['fileName'];
    }


    public function getOwnerById():int
    {
        return $this->attributes['owner'];
    }


    public function getGroupId():int
    {
        return $this->attributes['groupId'];
    }

}


