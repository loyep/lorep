<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
class User extends Authenticatable implements Transformable
{
    use TransformableTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nickname', 'display_name', 'status', 'activation_key', 'url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getAvatarAttribute()
    {
        return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAAD/CAIAAACxapedAAAABnRSTlMAAAAAAABupgeRAAADCklEQVR4nO3WgWkDMRBFwVxwISpVpaqUNHAOGAxr82Yq+IjHouvnU521pyfwNuvs6Qk3fqcHwBj106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7103Wdtac3wIzH9ID/rLOnJ9z45HvhxV7i50OX+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+um6pgd8n7P29ISn1tnTE76J20+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E/XNT3gqbP29ATeZp09PeGG20+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+um6ztrTG2DGY3rAV1pnT0+44ZC9ys+HLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfrj8epRb+tn/v5AAAAABJRU5ErkJggg==';
    }

    /**
     * The metas of this user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metas()
    {
        return $this->hasMany(UserMeta::class, 'user_id');
    }

    /**
     * The posts belongs this user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
}
