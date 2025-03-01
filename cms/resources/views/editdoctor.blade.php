@extends('layouts.head')
@section('Doctors','Dashboard')
@section('body')
@include('includes.flash')
<div class="row mt-4">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user-plus"></i> Update Doctor 
            </div>
            <div class="card-body">
            <form action="{{ route('update.doctor',$doctor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ $doctor->name }}" id="name" name="name" >
                    @error('name')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="{{ $doctor->email }}" name="email" >
                    @error('email')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" value="{{ $doctor->whatsapp }}" name="whatsapp">
                    @error('whatsapp')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"  rows="3">
                        {{ $doctor->description }}
                    </textarea>
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
                        <option value="Male" @if($doctor->gender == "Male") selected @endif>Male</option>
                        <option value="Female" @if($doctor->gender == "Female") selected @endif>Female</option>
                        <option value="Other" @if($doctor->gender == "Other") selected @endif>Other</option>
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
                        <option value="{{ $special->id }}" @if($doctor->specialities_id == $special->id) selected @endif>{{ $special->title }}</option>
                        @endforeach

                    </select>
                    @error('speciality')
                    <font color="red">
                        <b>{{ $message  }}</b>
                    </font>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">Upload Picture <br /> <font color="red">Please Upload Image Only If You Want To Change.</font></label>
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
</div>
@endsection