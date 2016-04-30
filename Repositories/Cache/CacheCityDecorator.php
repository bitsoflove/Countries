<?php

namespace Modules\Countries\Repositories\Cache;

use Modules\Countries\Repositories\CityRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCityDecorator extends BaseCacheDecorator implements CityRepository
{
    public function __construct(CityRepository $city)
    {
        parent::__construct();
        $this->entityName = 'cities';
        $this->repository = $city;
    }
}
