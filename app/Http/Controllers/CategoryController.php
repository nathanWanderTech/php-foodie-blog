<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id) {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(CategoryRequest $request) {
        $formData = $request->all();
        $category = new Category($formData);
        $category->save();
        // File
        if ($request->hasFile('thumbnail_photo') && $request->file('thumbnail_photo')->isValid()) {
            $path = $request->thumbnail_photo->storePublicly('categories', 'public');
            $category->thumbnail_photo = $path;
            $category->save();
        }
        return redirect('categories');
    }

    public function edit() {
        return view('categories.edit');
    }

    public function update() {
        return redirect('categories');
    }

    public function destroy () {
        return redirect('categories');
    }
}
