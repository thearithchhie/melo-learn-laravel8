<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public function show() {
        $showCategory = Category::all();
        return view("admin.category.show",compact("showCategory"));
    }

    public function CategoryAdd() {
        return view("admin.category.add");
    }

    public function CategoryStore(Request $request) {
      $category = new Category();
      $category->name = $request->name;
      $category->image = $request->image;
      $category->status = $request->status;
      $category->save();
      return Redirect()->route("show.category")->with('message', 'Category insert success');;
    }
}
