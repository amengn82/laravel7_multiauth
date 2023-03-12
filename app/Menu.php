<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image_url',
        'detail',
        'price',
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','carts','user_id','menu_id');
    }
}
