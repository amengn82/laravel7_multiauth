<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'menu_id',
        'status',
    ];

    public function menu()
    {
        return $this->belongsToMany('App\Menu','carts','user_id','menu_id');
    }
}
