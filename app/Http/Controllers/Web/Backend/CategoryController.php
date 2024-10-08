<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Validator;
use Exception;
>>>>>>> eb939a3 (8 octobar 2024)

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.layouts.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Category::create($request->only('title'));
=======
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('categories.create')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Category::create([
                'name' => $request->name
            ]);

            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
        } catch (Exception $e) {

            return redirect()->route('categories.index')->with('error', 'Failed to create Category.');
        }
>>>>>>> eb939a3 (8 octobar 2024)

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.layouts.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('title'));

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully.');
=======
        $validator = validator($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('categories.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name
            ]);

            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (Exception $e) {

            return redirect()->route('categories.index')->with('error', 'Failed to update Category.');
        }
>>>>>>> eb939a3 (8 octobar 2024)
    }

    public function destroy($id)
    {
<<<<<<< HEAD
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully.');
=======

        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        } catch (Exception $e) {

            return redirect()->route('categories.index')->with('error', 'Failed to delete Category.');
        }
>>>>>>> eb939a3 (8 octobar 2024)
    }
}
