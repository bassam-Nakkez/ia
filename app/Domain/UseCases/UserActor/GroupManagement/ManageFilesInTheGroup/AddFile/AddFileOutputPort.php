<?php

namespace App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile;

use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileResponseModel;

interface AddFileOutputPort {

    public function fileAdded(AddFileResponseModel $model ): ViewModel;
    public function unableToAddFile( \Exception $e): ViewModel;

}


