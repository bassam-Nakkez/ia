<?php

namespace App\RepositoryPattern;

use App\Domain\Interfaces\EntitiesInterface\FileEntity;
use App\Domain\Interfaces\RepositoriesInterface\FileRepository;
use App\Models\File;
use Illuminate\Support\Facades\DB;

class FileDatabaseRepository implements FileRepository
{
    public function addFile( $file): FileEntity
    {
      //  DB::beginTransaction();

        $file = File::create([
            'name' => $file->getFileName(),
            'owner' => $file->getOwnerID(),
            'content'=>$file->getFileContent(),
            'status' =>$file->getStatus(),
            'groupId' =>$file->getGroupID()
        ]);


        return $file;
      //  DB::commit();
  }


}
