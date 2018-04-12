<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Tag.
 *
 * @package namespace App\Entities;
 */
class Tag extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'slug', 'description', 'count', 'type'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'terms';

    /**
     * The metas of this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metas()
    {
        return $this->hasMany(TermMeta::class, 'term_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class,
            'term_posts', 'term_id', 'post_id');
    }

}
