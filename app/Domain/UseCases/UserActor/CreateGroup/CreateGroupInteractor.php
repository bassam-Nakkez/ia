<?php
namespace App\Domain\UseCases\UserActor\CreateGroup;

use App\Domain\Entity;
use App\Domain\Interfaces\FactoryInterface;
use App\Domain\Interfaces\RepositoriesInterface\GroupRepository;
use App\Domain\Interfaces\ViewModel;
use App\Factories\ModelFactory;
use App\RepositoryPattern\CRUDRepository;

class CreateGroupInteractor implements CreateGroupInputPort {


    public function __construct(
        private ModelFactory $factory,
        private GroupRepository $repo,
        private CreateGroupOutputPort $output
    ){}


    public function createGroup(CreateGroupRequestModel $request): ViewModel
    {

        // take the data from request and put them in $data variable

        try {

        // builde new Group object (instance) ..
            $group = $this->factory->make(Entity::Group ,[
            'name' => $request->getName(),
            'owner'=> $request->getOwner()
            ]);


            // call repo to create new Group by any frameWork logic
            $group = $this->repo->createGroup($group);

            //send success response
            return $this->output->groupCreated(new CreateGroupResponseModel($group));

        }
        catch (\Exception $e) {

            //send error
            return $this->output->unableToCreateGroup($e);
                }

        }

}


