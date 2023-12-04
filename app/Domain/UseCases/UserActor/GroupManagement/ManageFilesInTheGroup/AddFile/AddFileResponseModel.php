<?php

namespace App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile;

use App\Domain\Interfaces\EntitiesInterface\FileEntity;

class AddFileResponseModel{

    public function __construct(
        private FileEntity $file
    ){}

    public function getFile(): FileEntity{
        return $this->file;
    }
}
