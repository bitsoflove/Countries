<?php

namespace Modules\Countries\Repositories\Cache;

use Modules\Countries\Repositories\CountryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCountryDecorator extends BaseCacheDecorator implements CountryRepository
{
    public function __construct(CountryRepository $country)
    {
        parent::__construct();
        $this->entityName = 'countries';
        $this->repository = $country;
    }
}
