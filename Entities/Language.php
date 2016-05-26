<?php namespace Modules\Countries\Entities;

use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{

    use SoftDeletes;

    use EloquentTentacle;

    /**
     * @var string
     */
    protected $table = 'languages';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'slug'
    ];
    
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
