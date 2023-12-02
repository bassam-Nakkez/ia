<?php
namespace App\Factories;

use App\Domain\Entity;
use App\Domain\Interfaces\EntitiesInterface\BaseEntity;
use App\Domain\Interfaces\FactoryInterface;
use App\Models\CurrentReservation;
use App\Models\File;
use App\Models\Group;
use App\Models\History;
use App\Models\Memmber;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ModelFactory implements FactoryInterface
{

    public function make(Entity $type , Array $attributes = [] ):BaseEntity {

        // Add a New Modle to Factory here
        switch( $type ){
            case Entity::Group  : return new Group($attributes);
            case Entity::File   : return new File($attributes);
            case Entity::User   : return new User($attributes);
            case Entity::History: return new History($attributes);
            case Entity::Memmber: return new Memmber($attributes);
            case Entity::CurrentReservation: return new CurrentReservation($attributes);}
       }




       


     public function getModel(Entity $type ): Model {

     // Add a New Modle to Factory here
     switch( $type ){
        case Entity::Group  : return new Group;
        case Entity::File   : return new File;
        case Entity::User   : return new User;
        case Entity::History: return new History;
        case Entity::Memmber: return new Memmber;
        case Entity::CurrentReservation: return new CurrentReservation;}
     }

}
