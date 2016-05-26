<?php namespace Modules\Countries\Entities;

use Dimsav\Translatable\Translatable;
use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\City;
use Modules\Countries\Entities\CountryTranslation;

class Country extends Model
{
    use SoftDeletes;

    use EloquentTentacle;

    use Translatable;

    /**
     * @var string
     */
    protected $table = 'countries';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'slug',
        'iso_2',
        'country_id',
        'title'
    ];

    /**
     * @var array
     */
    public $translatedAttributes = [
        "country_id",
        "title"
    ];

    /**
     * @var string
     */
    public $translationModel = CountryTranslation::class;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function countryTranslations()
    {
        return $this->hasMany(CountryTranslation::class, 'country_id', 'id');
    }

    /**
     * @param array $attributes
     * @return bool|int
     */
    public function update(array $attributes = [])
    {
        $res = parent::update($attributes);
        self::sync($this, $attributes);
        return $res;
    }

    /**
     * @param array $attributes
     * @return static
     */
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
