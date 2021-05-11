<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }


    public function create()
    {
        $cat = Category::all()->pluck('name','id');
        return view('posts.create',compact('cat'));
    }

    public function store(PostsRequest $request)
    {

        $post = Post::create($request->all());
        $post->categories()->attach($request->categories);

        return redirect()->action([PostsController::class, 'index'])->with('message', 'Post Added Succesfully');

    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        $cat = Category::all()->pluck('name','id');
        $selectCatList=$post->categories->pluck('name');
        $selectCatList = $selectCatList->toArray();
        return view('posts.edit',compact('post','cat','selectCatList'));

    }

    public function update(PostsRequest $request, Post $post)
    {
        $post->update($request->all());
        $post->categories()->sync($request->categories);
        return redirect()->action([PostsController::class, 'index'])->with('message', 'Post updated Succesfully');
    }

    public function destroy(Post $post)
    {
        $post->categories()->detach();
        $post->delete();
        return redirect()->action([PostsController::class, 'index'])->with('message', 'Post deleted Succesfully');
    }

    /*
     * API
     */
    public function getPosts($catId = Null)
    {
        if($catId==NULL || $catId==''){
            $postList=Post::All()->toJson(JSON_PRETTY_PRINT);

        }else{

            //$postList =Category::find($catId)->posts;
            //$postList =Post::join('posts_Has_categories','posts_Has_categories.posts_id','=','posts.id')
              //  ->where('posts_Has_categories.id','=',$catId)->get();
                $postList= Post::with('categories')
                    ->join('posts_Has_categories','posts_Has_categories.posts_id','=','posts.id')
                    ->where('categories_id','=',$catId)
                    ->get();
        }
        return response($postList,200);


    }
}
