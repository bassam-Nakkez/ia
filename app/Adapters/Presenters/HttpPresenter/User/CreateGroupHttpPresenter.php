<?php

namespace App\Adapters\Presenters\HttpPresenter\User;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupOutputPort;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupResponseModel;
use App\Http\Resources\ExceptionJsonResponse;
use App\Http\Resources\SuccessJsonResponse;

class CreateGroupHttpPresenter  implements CreateGroupOutputPort
{



    public function groupCreated(CreateGroupResponseModel $model ): ViewModel
    {
      return new JsonResourceViewModel(new SuccessJsonResponse($model->getGroup(),'Group Created Successfully'));
    }



    public function unableToCreateGroup( \Exception $e): ViewModel
    {
        return new JsonResourceViewModel(new ExceptionJsonResponse($e));
    }



}

