<?php
namespace App\Domain\Interfaces\EntitiesInterface;


interface GroupEntity extends BaseEntity{
    public function getId(): int;
    public function getName(): string;
    public function setName(string $name);
    public function getOwnerId(): int;
    public function setOwnerId(int $owner);
    public function getattributes():Array;


    // public function getAttributes(): array;

}

