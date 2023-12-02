<?php

namespace App\Domain\Interfaces;

use App\Domain\Entity;
use App\Domain\Interfaces\EntitiesInterface\BaseEntity;


interface RepositoryInterface
{

    public function createModel( Entity $type ,BaseEntity $Model):BaseEntity;

    // public function updateModel(Entity $type,BaseEntity $Model ): BaseEntity;

    // public function deleteModel(Entity $type ,BaseEntity $Model ): BaseEntity;

    // public function getModel(Entity $type ,BaseEntity $Model): BaseEntity;

    // public function findById(Entity $type , int $id): BaseEntity;

}

