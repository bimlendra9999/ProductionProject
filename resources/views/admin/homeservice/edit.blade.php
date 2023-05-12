@extends('admin.layout.master')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <h2>Add Service</h2>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('services.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
<form action="{{ route('services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Service Name:</strong>
                <input type="text" class="form-control" name="name" value="{{$services->name}}"/>
                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Slug</strong>
                <input type="text" class="form-control" name="slug" value="{{$services->slug}}"/>
                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Tagline</strong>
                <input type="text" class="form-control" name="tagline" value="{{$services->tagline}}"/>
                @error('tagline') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Service Category</strong>
                <select class="form-control" name="service_category_id">
                    <option value="">Select Service Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == $services->service_category_id ? 'selected' : '' }}>{{$category->name}}</option>
                        @endforeach
                </select>
                @error('service_category_id') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Price</strong>
                <input type="text" class="form-control" name="price" value="{{$services->price}}"/>
                @error('price') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Discount</strong>
                <input type="text" class="form-control" name="discount" value="{{$services->discount}}"/>
                @error('discount') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Discount Type</strong>
                <select class="form-control" name="discount_type" value="{{$services->discount_type}}">
                    <option value="">Select Service Category</option>
                    <option value="fixed" {{$services->discount_type == 'fixed' ? 'selected':'' }}>Fixed</option>
                    <option value="percent"  {{$services->discount_type == 'percent' ? 'selected':'' }}>Percent</option>
                </select>
                @error('discount_type') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" name="description" >{{$services->description}}</textarea>
                @error('description') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Inclusion</strong>
                <textarea class="form-control" name="inclusion">{{$services->inclusion}}</textarea>
                @error('inclusion') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Exclusion</strong>

                <textarea class="form-control" name="exclusion">{{$services->exclusion}}</textarea>
                    @error('exclusion') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Thumbnail</strong>
                <input type="file" class="form-control" name="thumbnail" id="thumbnail"/>
                    @error('thumbnail') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" class="form-control" name="image" id="image"/>
                    @error('image') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Edit Service</button>
    <br><br>
</form>

@endsection
