<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index () {
        return view('categories.index');
    }

    public function show() {
        return view('categories.show');
    }

    public function create() {
        return view('categories.create');
    }

    public function store(CategoryRequest $request) {
        $formData = $request->all();
        Category::create($formData);
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
