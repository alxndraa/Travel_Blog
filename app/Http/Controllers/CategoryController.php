<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Display all categories
    public function index()
    {
        //
    }

    //Create new category
    public function create()
    {
        //
    }

    //Store newly created category
    public function store(Request $request)
    {
        //
    }

    //Display specific category
    public function show(Category $category)
    {
        $articles = $category->articles()->get();
        return view('category.show', ['articles' => $articles, 'category' => $category]);
    }

    //Show the form to edit a specific category
    public function edit(Category $category)
    {
        //
    }

    //Update the category's values in storage
    public function update(Request $request, Category $category)
    {
        //
    }

    //Remove or delete a specific category
    public function destroy(Category $category)
    {
        //
    }
}
