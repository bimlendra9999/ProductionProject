<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ServiceCategory;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scategories = ServiceCategory::orderBy('id','desc')->paginate(10);
        return view('admin.category.index', compact('scategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);

        $category = new ServiceCategory();
        $category-> name = $request->name;
        $category-> slug = $request->slug;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);
        $category->image = $imageName;

        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category has been created successful!');

    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceCategory $scategory)
    {
        return view('admin.category.show',compact('scategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $scategory = ServiceCategory::find($id);
        return view('admin.category.edit',compact('scategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);

        $category = ServiceCategory::find($id);
        $category-> name = $request->name;
        $category-> slug = $request->slug;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);
        $category->image = $imageName;

        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category has been created successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scategory = ServiceCategory::find($id);
        $scategory->delete();
        return redirect()->route('categories.index')
        ->with('success','Category has been deleted successfully');
    }
}
