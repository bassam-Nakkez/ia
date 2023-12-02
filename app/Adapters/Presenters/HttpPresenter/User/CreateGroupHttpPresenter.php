<?php

namespace App\Adapters\Presenters\HttpPresenter\User;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use App\Adapters\ViewModels\HttpResponseViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupOutputPort;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupResponseModel;
use Illuminate\Http\JsonResponse;

class CreateGroupHttpPresenter extends HttpBasePresenter implements CreateGroupOutputPort
{



    public function groupCreated(CreateGroupResponseModel $model ): ViewModel
    {
      return  $this->sendSuccessJsonResponse($model ,'Group Created Successfully');
    }



    public function unableToCreateGroup( \Exception $e): ViewModel
    {
      return $this->sendErrorJsonResponse($e->getMessage() );
    }



}

