<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

    public function index () {
        $currentUser = Auth::user();
        $categories = Category::all();
        return view('categories.index', compact('categories', 'currentUser'));
    }

    public function show($id) {
        $currentUser = Auth::user();
        $category = Category::find($id);
        $categories = Category::all();
        return view('categories.show', compact('category', 'categories', 'currentUser'));
    }

    public function create() {
        $currentUser = Auth::user();
        $categories = Category::all();
        return view('categories.create', compact('categories', 'currentUser'));
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
