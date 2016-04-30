<?php namespace Modules\Countries\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\Country;

class CountryTranslation extends Model
{

    /**
     * Generated
     */

    protected $table = 'country_translations';
    protected $fillable = ['id', 'country_id', 'title'];

    use SoftDeletes;


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function update(array $attributes = [])
    {
        $res = parent::update($attributes);
        self::sync($this, $attributes);
        return $res;
    }

    public static function create(array $attributes = [])
    {
        $res = parent::create($attributes);
        self::sync($res, $attributes);
        return $res;
    }

    /**
     * Sync many-to-many relationships
     */
    private static function sync($model, array $attributes = [])
    {

    }

}
