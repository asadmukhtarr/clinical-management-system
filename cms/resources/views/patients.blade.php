@extends('layouts.head')
@section('title','Patients')
@section('body')
@include('includes.flash')
<div class="row">
    <div class="col-lg-4">
        <div class="card mt-3 mb-3 rounded-0">
            <div class="card-header">
                <i class="fa fa-user-plus"></i> Add New Patient
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('save.patient') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}" >
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-calendar"></i> Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" >
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-venus-mars"></i> Gender</label>
                        <select name="gender" class="form-control" >
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-phone"></i> Contact Number</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter contact number" value="{{ old('contact') }}" >
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}" >
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-map-marker"></i> Address</label>
                        <textarea name="address" class="form-control" rows="3" placeholder="Enter address" >{{ old('address') }}</textarea>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger float-end rounded-0"><i class="fa fa-save"></i> Save Patient</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"></i> All Patients
            </div>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petients as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->contact }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('users.destroy',$user->id) }}">
                                <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection