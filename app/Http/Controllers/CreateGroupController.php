<?php

namespace App\Http\Controllers;

use App\Adapters\Presenters\HttpPresenter\User\CreateGroupHttpPresenter;
use App\Adapters\ViewModels\HttpResponseViewModel;
use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInputPort;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInteractor;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupRequestModel;
use App\Http\Requests\Group\CreateGroupRequest ;
use Illuminate\Http\JsonResponse ;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateGroupController extends Controller
{
    public function __construct(
        private CreateGroupInputPort $interactor
        ){}


    public function __invoke(CreateGroupRequest $request)
    {
        $viewModel = $this->interactor->createGroup(
            new CreateGroupRequestModel($request->validated())
        );


        if ($viewModel instanceof JsonResourceViewModel) {
            return $viewModel->getResponse();
        }

        return null;
    }

}
