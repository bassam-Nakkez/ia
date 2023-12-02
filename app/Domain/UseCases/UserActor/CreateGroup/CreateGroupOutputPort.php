<?php

namespace App\Domain\UseCases\UserActor\CreateGroup;

use App\Domain\Interfaces\ViewModel;

interface CreateGroupOutputPort {

    public function groupCreated(CreateGroupResponseModel $model ): ViewModel;
    public function unableToCreateGroup( \Exception $e): ViewModel;

}


