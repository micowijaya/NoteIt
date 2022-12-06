@extends('layout.app')

@section('content')

<div class="container">

    <div class="ps-3 pe-3 mt-4">
        <h2 class="" style="color: #98A8F8 !important">
            Change Password
        </h2>
    </div>
    <hr class="border border-2 opacity-50" style="border-color:#98A8F8 !important;">

    
    <form class="mt-4" action="{{route('updateProfile', Auth::user()->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="currentPassword" class="form-label"><b>Enter Current Password</b></label>
                <input type="password" class="form-control" id="currentPassword">
            </div>

            <div class="mb-3 col-md-6">
                <label for="changePassword" class="form-label"><b>Enter New Password</b> <span style="opacity:50%;">( 8-20 characters )</span></label>
                <input type="password" class="form-control" id="changePassword">
            </div>
        </div>

        <div class="row mt-3">
            <div class="mb-3 col-md-6">
                <label for="cChangePassword" class="form-label"><b>Re-enter New Password</b></label>
                <input type="password" class="form-control" id="cChangePassword">
            </div>
    
            <div class="mb-3 col-md-6 row">
                <div class="col-md-9">
                    <label for="profileCPassword" class="form-label"><b>Enter OTP <span style="color: red !important">*check your email</span></b></label>
                    <input type="password" class="form-control" id="profileCPassword">
                </div>

                <button type="" class="mt-4 btn btn-add col-md-3">Request OTP</button>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-4 btn btn-add" style="width: 20%">Submit</button>
        </div>
    </form>

</div>

@endsection