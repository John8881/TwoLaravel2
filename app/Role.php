<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['name', 'display_name'];// это позволяет изменять более одного поля с приведёнными именами одновременно
     /**
     * Пользователи, которые принадлежат данной роли.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_roles', 'user_id', 'role_id');
    }
}
