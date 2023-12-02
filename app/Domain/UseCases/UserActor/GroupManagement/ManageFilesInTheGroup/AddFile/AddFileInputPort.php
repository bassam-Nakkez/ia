<?php

namespace App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile;

use App\Domain\Interfaces\ViewModel;

interface AddFileInputPort
{
    public function AddFile(AddFileRequestModel $model): ViewModel;

}

