<?php

namespace Modules\Countries\Repositories\Eloquent;

use Modules\Countries\Repositories\CityRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentCityRepository extends EloquentBaseRepository implements CityRepository
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
