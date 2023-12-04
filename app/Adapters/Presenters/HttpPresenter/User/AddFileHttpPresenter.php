<?php

namespace App\Adapters\Presenters\HttpPresenter\User;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileOutputPort ;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileResponseModel ;
use App\Http\Resources\ExceptionJsonResponse;
use App\Http\Resources\SuccessJsonResponse;

class AddFileHttpPresenter extends HttpBasePresenter implements AddFileOutputPort
{



    public function fileAdded(AddFileResponseModel $model ): ViewModel
    {
        return new JsonResourceViewModel(new SuccessJsonResponse($model->getFile(),'File Added Successfully'));
    }


    public function unableToAddFile( \Exception $e): ViewModel
    {
      //  DB::rollBack();
      return new JsonResourceViewModel(new ExceptionJsonResponse($e));
    }

}

