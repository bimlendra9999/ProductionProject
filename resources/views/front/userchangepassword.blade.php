@extends('front.layout.master')

@section('content')

<div class="container" style="display:flex; flex-direction:column; justify-content:center; align-item:center; margin:auto; width:50%;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="centered-div" style="margin-bottom:20px;"><h3 style="display: flex; justify-content: center; align-items: center;"><strong>{{ __('Change Password') }}</strong></h3></div>

                    <form action="{{ route('userupdate-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3" style="margin-bottom:10px;">
                                <label for="oldPasswordInput" class="">Old Password</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3" style="margin-bottom:10px;">
                                <label for="newPasswordInput" class="">New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3" style="margin-bottom:10px;">
                                <label for="confirmNewPasswordInput" class="">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" style="color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
