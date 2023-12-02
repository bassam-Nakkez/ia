<?php

namespace App\Domain\UseCases\UserActor\CreateGroup;

use App\Domain\Interfaces\ViewModel;

interface CreateGroupInputPort
{
    public function createGroup(CreateGroupRequestModel $model): ViewModel;

}

