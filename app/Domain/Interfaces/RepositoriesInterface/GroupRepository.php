<?php

namespace  App\Domain\Interfaces\RepositoriesInterface;

use App\Domain\Interfaces\EntitiesInterface\GroupEntity;

interface GroupRepository {

    public function createGroup(GroupEntity $group ): GroupEntity;

    // public function getUserGroup(int $userId);

}
