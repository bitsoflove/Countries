<?php

namespace Modules\Countries\Repositories\Cache;

use Modules\Countries\Repositories\LanguageRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheLanguageDecorator extends BaseCacheDecorator implements LanguageRepository
{
    public function __construct(LanguageRepository $language)
    {
        parent::__construct();
        $this->entityName = 'languages';
        $this->repository = $language;
    }
}
