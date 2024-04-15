<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Auth\LoginRequest;
class CategoryCrudController extends Controller
{
    //


/**
     * Show the table data of resource.
     *
     *  
     */

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *  
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {

 

        $request->validate([
            'c_name' => 'required',
            'c_sort_order' => 'required',   
        ]);

        Category::create($request->all());

        return redirect('admin/category')->with('success', 'Category have been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
 
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     *
 
     */
    public function update(Request $request, Category $category)
    {

      
        $request->validate([
            'c_name' => 'required',
            'c_sort_order' => 'required',
        ]);

        $category->update($request->all());
        return redirect()->route('admin.category.index')
            ->with('success', 'Category has been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('admin/category')->with('success', 'Category has been deleted successfully');
    }
 
}
