<?php
namespace App\Domain\UseCases\UserActor\ManageFilesInTheFile\AddFile;

use App\Domain\Entity;
use App\Domain\Interfaces\FactoriesInterfaces\FileFactory;
use App\Domain\Interfaces\FactoryInterface;
use App\Domain\Interfaces\RepositoriesInterface\FileRepository;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileInputPort;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileOutputPort;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileRequestModel;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileResponseModel;

class AddFileInteractor implements AddFileInputPort {
    public function __construct(
        private FactoryInterface $factory,
        private FileRepository $repo,
        private AddFileOutputPort $output
    ){}


    public function AddFile(AddFileRequestModel $request): ViewModel
    {

        // take the data from request and put them in $data variable
        $data = $request->getRequestAttributes();

        try {

          // builde new File object (instance) ..
          $File = $this->factory->make(Entity::File , $data);

            // call repo to create new File by any frameWork logic
            $File = $this->repo->AddFile($File);

            //send success response
            return $this->output->fileAdded(new AddFileResponseModel($File));

        }
        catch (\Exception $e) {

            //send error
            return $this->output->unableToAddFile($e);
                }

        }

}


