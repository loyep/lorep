<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id',
        'content', 'title', 'excerpt', 'status',
        'comment_status', 'ping_status', 'password',
        'slug', 'pinged', 'to_ping', 'parent', 'url',
        'menu_order', 'type', 'mime', 'comment_count',
        'created_gmt', 'updated_gmt'];

    /**
     * The author of this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The comments belongs to this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_post_id', 'post_id');
    }

    /**
     * The metas of this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metas()
    {
        return $this->hasMany(PostMeta::class, 'comment_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,
            'term_posts', 'post_id', 'term_id')->where('type', 'tag');
    }

    public function categories ()
    {
        return $this->belongsToMany(Category::class,
            'term_posts', 'post_id', 'term_id')->where('type', 'category');
    }
}
