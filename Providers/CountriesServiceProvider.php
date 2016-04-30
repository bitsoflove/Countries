<?php namespace Modules\Countries\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Countries\Facades\Gateways\LanguagesGateway;

class CountriesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(CountryMonkeyPatchProvider::class);
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {

        $migrations = realpath(__DIR__.'/../Database/Migrations');

        $this->publishes([
          $migrations => $this->app->databasePath().'/migrations',
        ], 'migrations');


        $this->app->bind(
            'Modules\Countries\Repositories\CityRepository',
            function () {
                $repository = new \Modules\Countries\Repositories\Eloquent\EloquentCityRepository(new \Modules\Countries\Entities\City());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Countries\Repositories\Cache\CacheCityDecorator($repository);
            }
        );


        $this->app->bind(
            'Modules\Countries\Repositories\CountryRepository',
            function () {
                $repository = new \Modules\Countries\Repositories\Eloquent\EloquentCountryRepository(new \Modules\Countries\Entities\Country());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Countries\Repositories\Cache\CacheCountryDecorator($repository);
            }
        );


        $this->app->bind(
            'Modules\Countries\Repositories\CountryTranslationRepository',
            function () {
                $repository = new \Modules\Countries\Repositories\Eloquent\EloquentCountryTranslationRepository(new \Modules\Countries\Entities\CountryTranslation());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Countries\Repositories\Cache\CacheCountryTranslationDecorator($repository);
            }
        );


        $this->app->bind(
            'Modules\Countries\Repositories\LanguageRepository',
            function () {
                $repository = new \Modules\Countries\Repositories\Eloquent\EloquentLanguageRepository(new \Modules\Countries\Entities\Language());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Countries\Repositories\Cache\CacheLanguageDecorator($repository);
            }
        );

        $this->app->bind('languages',function(){
            return $this->app->make(LanguagesGateway::class);
        });

    }
}
