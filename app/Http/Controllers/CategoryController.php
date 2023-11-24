<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller

{
    public function addCategory()
{

    return view('backend.includes.pages.category.add');
}

public function manageCategory()
{
    $categories = Category::orderBy('id', 'desc')->get();
    return view('backend.includes.pages.category.manage', compact('categories'));

}

public function categoryStore(Request $request)
{
    $this->validate($request, [
        'name' => 'required'
    ]);

    Category::create([
    'name' => $request->name,
    'slug' => Str::slug($request->name),
    ]);

    session()->flash('success', 'Category has been created');
    return redirect()->back();
}

public function categoryEdit($id)
{
    $category = Category::find($id);
    return view('backend.includes.pages.category.edit', compact('category'));
}
public function categoryUpdate(Request $request, $id)
{
    $category = Category::find($id);
    $category->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
    ]);
    session()->flash('success', 'Category has been updated');
    return redirect()->back();
  }
}
