<?php

namespace Modules\Countries\Repositories\Eloquent;

use Modules\Countries\Repositories\CountryRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentCountryRepository extends EloquentBaseRepository implements CountryRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->with('translations')->get();
        }

        return $this->model->get();
    }
}
