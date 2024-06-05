<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Country;
use App\Models\Genre;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        View::composer('layoutsuser.header', function ($view) {
            $countries = Country::all();
            $view->with('country', $countries);
        });
        View::composer('layoutsuser.header', function ($view) {
            $genres = Genre::all();
            $view->with('genre', $genres);
        });
    }
}
