<?php namespace Modules\Countries\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\Country;

class CountryTranslation extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'country_translations';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'country_id',
        'title'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
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
