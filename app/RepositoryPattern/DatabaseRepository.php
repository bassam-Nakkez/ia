<?php

namespace App\RepositoryPattern;

use App\Domain\Entity;
use App\Domain\Interfaces\EntitiesInterface\BaseEntity;
use App\Domain\Interfaces\EntitiesInterface\GroupEntity;
use App\Domain\Interfaces\GroupModel\GroupRepository;
use App\Domain\Interfaces\RepositoryInterface;
use App\Factories\ModelFactory;
use App\Models\File;
use App\Models\Group;
use App\Models\History;
use App\Models\Memmber;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

// class DatabaseRepository implements RepositoryInterface  {


    //  public function createModel( Entity $type ,BaseEntity $Model):BaseEntity
    //  {
    //     $factory = new ModelFactory;
    //     $temp =  $factory->getModel($type);
    //     $temp::create( $Model );
    //     return $factory->make($type , $Model->getattributes());
    //  }


    // public function updateModel(Entity $type,BaseEntity $Model ): BaseEntity{}

    // public function deleteModel(Entity $type ,BaseEntity $Model ): BaseEntity{}

    // public function getModel(Entity $type ,BaseEntity $Model): BaseEntity{}

    // public function findById(Entity $type , int $id): BaseEntity{}

//     public function createGroup( $group): GroupEntity
//     {
//     return Group::create([
//         'name' => $group->getName(),
//         'owner' => $group->getOwnerId(),
//     ]);
// }

// }


