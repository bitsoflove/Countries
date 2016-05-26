<?php namespace Modules\Countries\Entities;

use Dimsav\Translatable\Translatable;
use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\City;
use Modules\Countries\Entities\CountryTranslation;

class Country extends Model
{

    /**
     * Generated
     */

    protected $table = 'countries';
    protected $fillable = ['id', 'slug', 'iso_2', 'country_id', 'title'];

    use SoftDeletes;

    use EloquentTentacle;

    use Translatable;

    public $translatedAttributes = ["country_id","title"];
    public $translationModel = CountryTranslation::class;

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function countryTranslations()
    {
        return $this->hasMany(CountryTranslation::class, 'country_id', 'id');
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
