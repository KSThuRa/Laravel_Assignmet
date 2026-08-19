<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string',
            'image' => 'nullable'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        if($request->hasFile('image')) {
            $request->image->move(public_path('categoryImages'), $imageName);
        }
        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);


        return redirect()->route('categories.index');
    }

   public function edit($id)
{
    $category = Category::findOrFail($id);

    return view('category.edit', compact('category'));
}

    public function update(CategoryUpdateRequest $request){
        $category = Category::find($request->id);
        $category->update([
            'name' => $request->name
        ]);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
