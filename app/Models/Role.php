<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

        /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'permission'
    ];




    //    public function users(){

    //         return $this->belongsToMany(User::class);
    //     }

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function permission()
    {

        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
