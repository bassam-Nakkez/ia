<?php
namespace App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile;

use App\Domain\Entity;
use App\Domain\Interfaces\RepositoriesInterface\FileRepository;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileInputPort;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileOutputPort ;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileResponseModel;
use App\Factories\ModelFactory;
use App\RepositoryPattern\CRUDRepository;

class AddFileInteractor implements AddFileInputPort {
    public function __construct(
        private ModelFactory $factory,
        private FileRepository $repo,
        private AddFileOutputPort $output
    ){}


    public function AddFile(AddFileRequestModel $request): ViewModel
    {

        // take the data from request and put them in $data variable

        try {

          // builde new File object (instance) ..
          $File = $this->factory->make(Entity::File , [
            "fileName"=>$request->getFileName(),
            "owner"=>$request->getOwnerById(),
            "content"=>$request->getContent(),
            "groupId"=>$request->getGroupId()
          ]);


            // call repo to create new File by any frameWork logic
            $File = $this->repo->addFile($File);

            //send success response
            return $this->output->fileAdded(new AddFileResponseModel($File));


        }
        catch (\Exception $e) {

            //send error
            return $this->output->unableToAddFile($e);
                }

        }

}


