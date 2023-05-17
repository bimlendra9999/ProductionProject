@extends('front.layout.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="position: absolute; width: 15em; display: flex; justify-content: center; align-items: center; color: white; background: green; height: 3em; left: 35%;">{{Auth::user()->name}}'s Profile</div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <br><br><br>
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form action="{{route('profileupdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <br><br>
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image">
                        @if(Auth::user()->profile_photo_path)
                            <div>
                                <img src="{{ asset('profiles/'. Auth::user()->profile_photo_path) }}" alt="Profile Image" width="150">
                            </div>
                        @endif
                       <div class="form-group">
                           <label for="name"><strong>Name:</strong></label>
                           <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->name}}">
                       </div>
                        <div class="form-group">
                           <label for="email"><strong>Email:</strong></label>
                           <input type="text" class="form-control" id ="email" value="{{Auth::user()->email}}" name="email">
                       </div>
                       <div class="form-group">
                           <label for="phone"><strong>Phone:</strong></label>
                           <input type="text" class="form-control" id ="phone" value="{{Auth::user()->phone}}" name="phone">
                       </div>
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
