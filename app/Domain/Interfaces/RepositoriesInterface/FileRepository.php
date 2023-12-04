<?php

namespace  App\Domain\Interfaces\RepositoriesInterface;

use App\Domain\Interfaces\EntitiesInterface\FileEntity;

interface FileRepository
{
    public function addFile( FileEntity $file): FileEntity;

    // public function updateModel(Entity $type,BaseEntity $Model ): BaseEntity;

    // public function deleteModel(Entity $type ,BaseEntity $Model ): BaseEntity;

    // public function getModel(Entity $type ,BaseEntity $Model): BaseEntity;

    // public function findById(Entity $type , int $id): BaseEntity;

}

?>
