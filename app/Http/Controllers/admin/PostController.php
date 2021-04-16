<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Tag;
use Illuminate\Http\Request;
use  App\Models\admin\Post;
use  App\Models\admin\Admin;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $id = Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.post.index' , compact('posts' , 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create' , compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        if(empty($request->status))
        {
        $status = $request['status'] = 0;
        $post->title = $request->post_title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->posted_by = $request->posted_by;
        $post->body = $request->editor1;
        if($request->hasFile('post_image'))
        {
             $imageName = $request->post_image->store('public');
             $post->image = $imageName;
        }

        $post->status = $status;
        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        return redirect()->back()->with('success' , 'Inserted Post Successfully');   
        }else
        {
        $status = $request['status'] = 1;
        $post->title = $request->post_title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->posted_by = $request->posted_by;
        $post->body = $request->editor1;
        if($request->hasFile('post_image'))
        {
             $imageName = $request->post_image->store('public');
             $post->image = $imageName;
        }
        $post->status = $status;
        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        return redirect()->back()->with('success' , 'Inserted Post Successfully');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit' , compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        if(empty($request->status))
        {
        $status = $request['status'] = 0;
        $post->title = $request->post_title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->post_slug;
        $post->body = $request->editor1;
        if($request->hasFile('post_image'))
        {
          $imageName = $request->file('post_image')->store('public');
          $post->image = $imageName;
        }

        $post->status = $status;
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        $post->save();
        return redirect()->back()->with('success' , 'Updated Post Successfully');
        }else
        {
        $status = $request['status'] = 1;
        $post->title = $request->post_title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->post_slug;
        $post->body = $request->editor1;
        if($request->hasFile('post_image'))
        {
          $imageName = $request->file('post_image')->store('public');
          $post->image = $imageName;
        }

        $post->status = $status;
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        $post->save();
        return redirect()->back()->with('success' , 'Updated Post Successfully');

        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success' , 'Deleted Post Successfully');
    }


    public function test()
    {
         // return $admin->roles;
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        return $admin;
         // foreach ($admin->roles as $role) {
         //     foreach ($role->permissions as $permission) {
         //         if($permission->id == 1){

         //             return $permission->name;
         //         }
         //         }
         //     }
    }

}


