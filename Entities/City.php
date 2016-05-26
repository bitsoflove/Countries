<?php namespace Modules\Countries\Entities;

use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\Country;

class City extends Model
{

    use SoftDeletes;

    use EloquentTentacle;

    /**
     * @var string
     */
    protected $table = 'cities';

    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'postcode', 'country_id', 'lat', 'lng'];

    /**
     * @var array
     */
    protected $with = [
        'country'
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
