<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class TagMeta.
 *
 * @package namespace App\Entities;
 */
class TermMeta extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'term_id', 'meta_key', 'meta_value'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'term_metas';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function term()
    {
        return $this->belongsTo(Tag::class, 'term_id');
    }

}
