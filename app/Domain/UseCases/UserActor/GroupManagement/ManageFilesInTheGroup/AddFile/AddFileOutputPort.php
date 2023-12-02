<?php

namespace App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile;

use App\Domain\Interfaces\ViewModel;

interface AddFileOutputPort {

    public function fileAdded(AddFileResponseModel $model ): ViewModel;
    public function unableToAddFile( \Exception $e): ViewModel;

}


