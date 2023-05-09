@extends('admin.layout.master')

@section('content')

<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Edit Category</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
</div>
</div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('categories.update',$scategory->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-xs-12 col-sm-9">
    <div class="form-group">
    <strong>Category Name:</strong>
    <input type="text" name="name" value="{{ $scategory->name }}" class="form-control" placeholder="Category Name">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-9">
    <div class="form-group">
    <strong>Category Slug:</strong>
    <input type="text" name="slug" value="{{ $scategory->slug }}" class="form-control" placeholder="Category Slug">
    @error('slug')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Category Image:</strong>
        <input type="file" class="input-file" name="image"/>
        @error('image')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
    </div>

    </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>

@endsection
