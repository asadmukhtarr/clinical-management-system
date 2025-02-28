@extends('layouts.head')
@section('Doctors','Dashboard')
@section('body')
@include('includes.flash')
<div class="row mt-4">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user-plus"></i> New Doctor 
            </div>
            <div class="card-body">
            <form action="{{ route('save.doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                    @error('name')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                    @error('email')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                    @error('whatsapp')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    @error('description')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('gender')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="specialities_id" class="form-label">Speciality</label>
                    <select class="form-select" id="specialities_id" name="speciality">
                        <option value="">Select Speciality</option>
                        @foreach($specilities as $special)
                        <option value="{{ $special->id }}">{{ $special->title }}</option>
                        @endforeach

                    </select>
                    @error('speciality')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">Upload Picture</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                    @error('picture')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
             <div class="card-header">
                <i class="fa fa-users"></i> All Doctors
             </div>
             <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>WhatsApp</th>
                        <th>Gender</th>
                        <th>Speciality</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->whatsapp }}</td>
                        <td>{{ $doctor->gender }}</td>
                        <td>{{ $doctor->speciality_id }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Delete Form -->
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection