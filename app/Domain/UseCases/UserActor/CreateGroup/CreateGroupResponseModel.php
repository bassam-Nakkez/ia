<?php

namespace App\Domain\UseCases\UserActor\CreateGroup;

use App\Domain\Interfaces\EntitiesInterface\GroupEntity;

class CreateGroupResponseModel{

    public function __construct(
        private GroupEntity $group
    ){}

    public function getGroup(): GroupEntity{
        return $this->group;
    }
}
