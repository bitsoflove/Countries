<?php namespace Modules\Countries\Facades\Gateways;

use Illuminate\Support\Collection;
use Modules\Countries\Entities\Country;
use Modules\Countries\Repositories\CountryRepository;

class CountryGateway
{

    /**
     * @var CountryRepository
     */
    protected $repository;

    public function __construct(
        CountryRepository $repository
    ) {
        $this->repository = $repository;
    }

    /**
     * Get all countries
     *
     * @return Collection
     */
    public function get()
    {
        return $this->repository->all();
    }

    /**
     * Retrieve the default country
     *
     * @return Country
     */
    public function default()
    {
        return $this->repository->findByAttributes([
            'iso_2' => config('asgard.countries.config.default')
        ]);
    }

    /**
     * Get a list of all countries keyed by their id
     *
     * @return Collection
     */
    public function keyed(){
        return $this->get()->lists('title', 'id');
    }

}
