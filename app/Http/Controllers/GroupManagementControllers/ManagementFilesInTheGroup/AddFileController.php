<?php
namespace App\Http\Controllers\GroupManagementControllers\ManagementFilesInTheGroup;

use App\Adapters\ViewModels\HttpResponseViewModel;
use App\Domain\UseCases\UserActor\ManageFilesInTheFile\AddFile\AddFileInteractor;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileInputPort;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileRequestModel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AddFileController extends Controller
{
    public function __construct(
        private AddFileInputPort $interactor
        ){}


    public function __invoke(Request $request)
    {
        $input = $request->all();
        $viewModel = $this->interactor->AddFile(
            new AddFileRequestModel($input)
        );


        if ($viewModel instanceof HttpResponseViewModel) {
            return $viewModel->getResponse();
        }

        return null;
    }
}
