<?php

namespace App\Http\Controllers;


use App\Models\category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('category', [
            'data' => $categories
        ]);
    }

    public function show($id)
    {
        $categorydata = category::find($id);

        return view('show', compact('categorydata'));
    }

    public function create()
    {

        return view('additem');
    }
    public function store(categoryRequest $request)
    {
        $category = new category();
        $originalname = $request->file('image')->getClientOriginalName();
        $filename = time() . date('y-m-d') . $originalname;

        $category->cname = $request->cname;
        $category->is_active = $request->is_active ? true : false;

        $category->image = $filename;
        $request->file('image')->storeAs('public/categories', $filename);

        $category->save();
        return redirect()
            ->route('categories.index')
            ->withMessage('Category added successfully');
    }

    public function edit($id)
    {
        $categorydata = category::find($id);
        return view('update', compact('categorydata'));
    }

    public function delete($id)
    {
        $categorydata = category::find($id);
        $categorydata->delete();
        return redirect()
            ->route('categories.index')
            ->withMessage('Category deleted successfully');
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = category::find($id);
        $originalname = $request->file('image')->getClientOriginalName();
        $filename = time() . date('y-m-d') . $originalname;

        $category->cname = $request->cname;
        $category->is_active = $request->is_active ? true : false;


        $request->file('image')->storeAs('public/categories', $filename);

        $category->cname = $request->cname;
        $category->is_active = $request->is_active ? true : false;
        $category->image = $filename;
        $category->save();
        return redirect()
            ->route('categories.index')
            ->withMessage('Category updated successfully');
    }
}
