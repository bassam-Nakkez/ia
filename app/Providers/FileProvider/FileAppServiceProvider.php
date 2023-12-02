<?php

namespace App\Providers\FileProvider;

use App\Adapters\Presenters\HttpPresenter\User\AddFileHttpPresenter;
use App\Domain\Interfaces\RepositoriesInterface\FileRepository;
use App\Domain\UseCases\UserActor\ManageFilesInTheFile\AddFile\AddFileInteractor;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileInputPort;
use App\Domain\UseCases\UserActor\ManageFilesInTheGroup\AddFile\AddFileOutputPort;
use App\Http\Controllers\GroupManagementControllers\ManagementFilesInTheGroup\AddFileController;
use App\RepositoryPattern\FileDatabaseRepository;
use Illuminate\Support\ServiceProvider;

class FileAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {


              //////------------------- << File Factory & Repository >>------------------

           $this->app->bind(
               FileRepository::class,
               FileDatabaseRepository::class
           );


            //                            ** UseCases **

           //////------------------- << File Factory & Repository >>------------------

           $this->app->bind(
               AddFileOutputPort::class,
               AddFileHttpPresenter::class
           );

           $this->app
               ->when(AddFileController::class)
               ->needs(AddFileInputPort::class)
               ->give(function ($app) {
                   return $app->make(AddFileInteractor::class, [
                       'output' => $app->make(AddFileHttpPresenter::class),
                   ]);
               });








    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
