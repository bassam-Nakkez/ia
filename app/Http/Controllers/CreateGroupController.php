<?php

namespace App\Http\Controllers;

use App\Adapters\Presenters\HttpPresenter\User\CreateGroupHttpPresenter;
use App\Adapters\ViewModels\HttpResponseViewModel;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInputPort;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInteractor;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupRequestModel;
use App\Http\Requests\CreateGroupRequest;
use Illuminate\Http\JsonResponse ;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateGroupController extends Controller
{
    public function __construct(
        private CreateGroupInteractor $interactor
        ){}


    public function __invoke(Request $request)
    {
        $input = $request->all();
        $viewModel = $this->interactor->createGroup(
            new CreateGroupRequestModel($input)
        );


        if ($viewModel instanceof HttpResponseViewModel) {
            return $viewModel->getResponse();
        }

        return null;
    }

}
