<?php

namespace Modules\Countries\Repositories\Cache;

use Modules\Countries\Repositories\CountryTranslationRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCountryTranslationDecorator extends BaseCacheDecorator implements CountryTranslationRepository
{
    public function __construct(CountryTranslationRepository $countryTranslation)
    {
        parent::__construct();
        $this->entityName = 'countrytranslations';
        $this->repository = $countryTranslation;
    }
}
