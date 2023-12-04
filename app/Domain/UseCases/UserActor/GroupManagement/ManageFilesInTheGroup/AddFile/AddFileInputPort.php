<?php

namespace App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile;

use App\Domain\Interfaces\ViewModel;

interface AddFileInputPort
{
    public function AddFile(AddFileRequestModel $model): ViewModel;

}

