<?php

namespace App\Adapters\Presenters\HttpPresenter\User;

use App\Adapters\Presenters\HttpPresenter\HttpBasePresenter;
use App\Domain\Interfaces\ViewModel;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileOutputPort;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileResponseModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
class AddFileHttpPresenter extends HttpBasePresenter implements AddFileOutputPort
{



    public function fileAdded(AddFileResponseModel $model ): ViewModel
    {
      return  $this->sendSuccessJsonResponse($model ,'File Added Successfully');
    }


    public function unableToAddFile( \Exception $e): ViewModel
    {
      //  DB::rollBack();
      return $this->sendErrorJsonResponse($e->getMessage() );
    }

}

