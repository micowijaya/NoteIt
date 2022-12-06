@extends('layout.app')

@section('content')

<div class="container">

    <div class="ps-3 pe-3 mt-4">
        <h2 class="" style="color: #98A8F8 !important">
            Profile
        </h2>
    </div>
    <hr class="border border-2 opacity-50" style="border-color:#98A8F8 !important;">

    
    <form class="mt-4" action="{{route('updateProfile', Auth::user()->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="profileEmail1" class="form-label"><b>Email address</b></label>
                <input type="email" class="form-control" name="profileEmail" id="profileEmail" aria-describedby="emailHelp" value="{{$user->email}}">
            </div>
    
            <div class="mb-3 col-md-6">
                <label for="profileName" class="form-label"><b>Full Name</b></label>
                <input type="text" class="form-control" name="profileName" value="{{$user->name}}" id="profileName">
            </div>
        </div>

        <div class="row mt-3">
            <div class="mb-3 col-md-6">
                <label for="profilePassword" class="form-label"><b>Enter Current Password</b></label>
                <input type="password" class="form-control" id="profilePassword">
            </div>
    
            <div class="mb-3 col-md-6">
                <label for="profileCPassword" class="form-label"><b>Re-enter Current Password</b></label>
                <input type="password" class="form-control" id="profileCPassword">
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="mt-4 btn btn-add" style="width: 20%">Submit</button>

        </div>
    </form>

</div>

@endsection