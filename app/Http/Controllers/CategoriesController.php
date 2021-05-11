<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        $cat = Category::all()->pluck('name','id');
        return view('categories.create',compact('cat'));
    }


    public function store(CategoryRequest $request)
    {
         Category::create($request->all());

        return redirect()->action([PostsController::class, 'index'])->with('message', 'Category Added Succesfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
