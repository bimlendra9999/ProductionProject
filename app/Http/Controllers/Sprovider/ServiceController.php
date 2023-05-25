<?php

namespace App\Http\Controllers\Sprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sprovider = Auth::user()->id;
        $services = Service::where('serviceprovider_id',$sprovider)->paginate(10);
        return view('sprovider.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        return view('sprovider.service.create', compact('categories'));
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
        $request->thumbnail->move(public_path('images/services/thumbnails'), $thumbnailName);
        $service->thumbnail = $thumbnailName;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images/services'), $imageName);
        $service->image = $imageName;

        $service->serviceprovider_id = Auth::user()->id;

        $service->save();
        return redirect()->route('sproviderservices.index')
        ->with('success','Service has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $services = Service::where('name','LIKE','%'.$search_text.'%')->paginate(5);
        return view('sprovider.service.search',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = ServiceCategory::all();
        $services = Service::find($id);
        return view('sprovider.service.edit',compact('categories','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        $service = Service::find($id);
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
        $request->thumbnail->move(public_path('images/services/thumbnails'), $thumbnailName);
        $service->thumbnail = $thumbnailName;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images/services'), $imageName);
        $service->image = $imageName;

        $service->save();
        return redirect()->route('sproviderservices.index')
        ->with('success','Service has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('sproviderservices.index')->with('success','Service has been deleted successfully');
    }
}
