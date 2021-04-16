<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Admin;
use App\Models\admin\Permission;

class Role extends Model
{
    use HasFactory;

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin__roles')->withTimestamps();
    }

    public function permissions()
    {
    	return $this->belongsToMany(Permission::class , 'permissions_roles')->withTimestamps();
    }

}
