@extends('layouts.head')
@section('title','Edit Patient')
@section('body')
@include('includes.flash')
<div class="row">
    <div class="col-lg-4">
        <div class="card mt-3 mb-3 rounded-0">
            <div class="card-header">
                <i class="fa fa-user-plus"></i> Add New Patient
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.update',$user->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter full name" value="{{ old('name') }}" >
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-calendar"></i> Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ $user->dob }}" >
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-venus-mars"></i> Gender</label>
                        <select name="gender" class="form-control" >
                            <option value="">Select Gender</option>
                            <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ $user->gender == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-phone"></i> Contact Number</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter contact number" value="{{ $user->contact }}" >
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $user->email }}" >
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-map-marker"></i> Address</label>
                        <textarea name="address" class="form-control" rows="3" placeholder="Enter address" >{{ $user->address }}</textarea>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger float-end rounded-0"><i class="fa fa-save"></i> Save Patient</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection