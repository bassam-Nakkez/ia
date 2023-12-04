<?php
namespace App\Http\Controllers\GroupManagementControllers\ManagementFilesInTheGroup;

use App\Adapters\ViewModels\HttpResponseViewModel;
use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileInputPort;
use App\Domain\UseCases\UserActor\GroupManagement\ManageFilesInTheGroup\AddFile\AddFileRequestModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\File\CreateFileRequest;
use Illuminate\Http\Request;

class AddFileController extends Controller
{
    public function __construct(
        private AddFileInputPort $interactor
        ){}


    public function __invoke (CreateFileRequest $request)
    {
        $viewModel = $this->interactor->AddFile(
            new AddFileRequestModel($request->validated())
        );


        if ($viewModel instanceof JsonResourceViewModel) {
            return $viewModel->getResponse();
        }

        return null;
    }
}
