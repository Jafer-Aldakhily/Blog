<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\admin\Post;
use App\Models\admin\Admin;
use Auth;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $admin
     * @return mixed
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $admin
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function view(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $admin
     * @return mixed
     */
    public function create()
    {

        $admin = Admin::find(Auth::guard('admin')->user()->id);
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if($permission->id == 1)
                    return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $admin
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function update(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $admin
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function delete(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $admin
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function restore(Admin $admin, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $admin
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $admin, Post $post)
    {
        //
    }
}
