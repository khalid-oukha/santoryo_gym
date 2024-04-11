<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\CoachRepository;
use App\Repositories\FeatureRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\CoachRepositoryInterface;
use App\Repositories\Interfaces\FeatureRepositoryInterface;
use App\Repositories\Interfaces\StatisticsRepositoryInterface;
use App\Repositories\Interfaces\SubscriptionRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\StatisticsRepository;
use App\Repositories\SubscriptionRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CoachRepositoryInterface::class, CoachRepository::class);
        $this->app->bind(SubscriptionRepositoryInterface::class, SubscriptionRepository::class);
        $this->app->bind(StatisticsRepositoryInterface::class, StatisticsRepository::class);
        $this->app->bind(FeatureRepositoryInterface::class, FeatureRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
