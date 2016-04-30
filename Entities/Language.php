<?php namespace Modules\Countries\Entities;

use Greabock\Tentacles\EloquentTentacle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{

    /**
     * Generated
     */

    protected $table = 'languages';
    protected $fillable = ['id', 'slug'];

    use SoftDeletes;

    use EloquentTentacle;
    
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
