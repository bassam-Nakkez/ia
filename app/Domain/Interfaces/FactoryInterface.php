<?php
namespace App\Domain\Interfaces;

use App\Domain\Entity;
use App\Domain\Interfaces\EntitiesInterface\BaseEntity;


interface FactoryInterface {


    public function make( Entity $type,
    Array $attributes = []
    ):BaseEntity;
}


