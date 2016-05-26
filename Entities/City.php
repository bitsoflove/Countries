<?php namespace Modules\Countries\Entities;

use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Countries\Entities\Country;

class City extends Model
{

    /**
     * Generated
     */

    protected $table = 'cities';
    protected $fillable = ['id', 'name', 'postcode', 'country_id', 'lat', 'lng'];

    protected $with = [
        'country'
    ];

    use SoftDeletes;

    use EloquentTentacle;

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
