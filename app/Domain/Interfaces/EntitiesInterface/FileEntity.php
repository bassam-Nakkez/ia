<?php

namespace App\Domain\Interfaces\EntitiesInterface;



interface FileEntity extends BaseEntity {
public function getFileName(): string;
public function getFileContent(): string;
public function getGroupID(): int;
public function getOwnerID(): int;

public function getStatus(): bool;

public function getFilePath(): string;

public function getAttributes():Array;

}
