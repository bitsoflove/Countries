<?php

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(['prefix' =>'/countries'], function (Router $router) {
    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



    $router->bind('cities', function ($id) {
        return app('Modules\Countries\Repositories\CityRepository')->find($id);
    });
    get('cities', ['as' => 'admin.countries.city.index', 'uses' => 'CityController@index']);
    get('cities/create', ['as' => 'admin.countries.city.create', 'uses' => 'CityController@create']);
    post('cities', ['as' => 'admin.countries.city.store', 'uses' => 'CityController@store']);
    get('cities/{cities}/edit', ['as' => 'admin.countries.city.edit', 'uses' => 'CityController@edit']);
    put('cities/{cities}/edit', ['as' => 'admin.countries.city.update', 'uses' => 'CityController@update']);
    delete('cities/{cities}', ['as' => 'admin.countries.city.destroy', 'uses' => 'CityController@destroy']);


    $router->bind('countries', function ($id) {
        return app('Modules\Countries\Repositories\CountryRepository')->find($id);
    });
    get('countries', ['as' => 'admin.countries.country.index', 'uses' => 'CountryController@index']);
    get('countries/create', ['as' => 'admin.countries.country.create', 'uses' => 'CountryController@create']);
    post('countries', ['as' => 'admin.countries.country.store', 'uses' => 'CountryController@store']);
    get('countries/{countries}/edit', ['as' => 'admin.countries.country.edit', 'uses' => 'CountryController@edit']);
    put('countries/{countries}/edit', ['as' => 'admin.countries.country.update', 'uses' => 'CountryController@update']);
    delete('countries/{countries}', ['as' => 'admin.countries.country.destroy', 'uses' => 'CountryController@destroy']);


    $router->bind('languages', function ($id) {
        return app('Modules\Countries\Repositories\LanguageRepository')->find($id);
    });
    get('languages', ['as' => 'admin.countries.language.index', 'uses' => 'LanguageController@index']);
    get('languages/create', ['as' => 'admin.countries.language.create', 'uses' => 'LanguageController@create']);
    post('languages', ['as' => 'admin.countries.language.store', 'uses' => 'LanguageController@store']);
    get('languages/{languages}/edit', ['as' => 'admin.countries.language.edit', 'uses' => 'LanguageController@edit']);
    put('languages/{languages}/edit', ['as' => 'admin.countries.language.update', 'uses' => 'LanguageController@update']);
    delete('languages/{languages}', ['as' => 'admin.countries.language.destroy', 'uses' => 'LanguageController@destroy']);



// append









});
