<?php

namespace App\RepositoryPattern;

use App\Domain\Interfaces\EntitiesInterface\GroupEntity;
use App\Domain\Interfaces\RepositoriesInterface\GroupRepository;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;

class GroupDatabaseRepository implements GroupRepository
{
    public function createGroup( $group): GroupEntity
    {
        return Group::create([
            'name' => $group->getName(),
            'owner' => $group->getOwnerId(),
        ]);
    }
}


