<?php

namespace App\Providers\GroupProvider;

use App\Adapters\Presenters\HttpPresenter\User\CreateGroupHttpPresenter;
use App\Domain\Interfaces\FactoryInterface;
use App\Domain\Interfaces\GroupModel\GroupFactory;
use App\Domain\Interfaces\RepositoriesInterface\GroupRepository;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInputPort;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupInteractor;
use App\Domain\UseCases\UserActor\CreateGroup\CreateGroupOutputPort;
use App\Factories\ModelFactory;
use App\Http\Controllers\CreateGroupController;
use App\RepositoryPattern\GroupDatabaseRepository;
use Illuminate\Support\ServiceProvider;

class GroupAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
                //////------------------- << Group Factory & Repository >>------------------
                $this->app->bind(
                    FactoryInterface::class,
                    ModelFactory::class
                   );

               $this->app->bind(
                   GroupRepository::class,
                   GroupDatabaseRepository::class
               );


                //                            ** UseCases **

               //////------------------- << Group Factory & Repository >>------------------

               $this->app->bind(
                   CreateGroupOutputPort::class,
                   CreateGroupHttpPresenter::class
               );

               $this->app
                   ->when(CreateGroupController::class)
                   ->needs(CreateGroupInputPort::class)
                   ->give(function ($app) {
                       return $app->make(CreateGroupInteractor::class, [
                           'output' => $app->make(CreateGroupHttpPresenter::class),
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
