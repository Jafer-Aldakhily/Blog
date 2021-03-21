<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Role;

class Admin extends Model
{
    use HasFactory;

    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin__roles')->withTimestamps();
    }
}
