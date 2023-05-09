<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_type' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'thumbnail' => 'required|mimes:jpeg,png',
            'description' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->tagline = $request->tagline;
        $service->service_category_id = $request->service_category_id;
        $service->price = $request->price;
        $service->discount = $request->discount;
        $service->discount_type = $request->discount_type;
        $service->description = $request->description;
        $service->inclusion= str_replace("\n",'|',trim($request->inclusion));
        $service->exclusion= str_replace("\n",'|',trim($request->exclusion));

        $thumbnailName = Carbon::now()->timestamp. '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('services/thumbnails'), $thumbnailName);
        $service->thumbnail = $thumbnailName;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('services'), $imageName);
        $service->image = $imageName;

        $service->save();
        return redirect()->route('services.index')
        ->with('success','Service has been Inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
