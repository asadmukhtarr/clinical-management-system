@extends('layouts.head')
@section('title','New Appointment')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card rounded-0 mt-3">
                <div class="card-header bg-danger text-white ">
                    <i class="fa fa-plus-circle"></i> Create New Appiontment
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><i class="fa fa-user-circle"></i> Select Patient</label>
                        <select name="" name="patient" id="" class="form-control rounded-0 mt-1">
                            <option value="">Select Patient</option>
                            @foreach($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                        @error('patient')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                    <div class="form-group mt-1">
                        <label for=""><i class="fa fa-stethoscope"></i> Select Specialties</label>
                        <select name="" name="Specialty" id="" class="form-control rounded-0 mt-1">
                            <option value="">Select Specialty</option>
                            @foreach($specilities as $specility)
                            <option value="{{ $specility->id }}">{{ $specility->title }}</option>
                            @endforeach
                        </select>
                        @error('Specialty')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                    <div class="form-group mt-1">
                        <label for=""><i class="fa fa-user-md"></i> Select Doctor</label>
                        <select name="" name="doctor" id="" class="form-control rounded-0 mt-1">
                            <option value="">Select Doctor</option>
                            @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                        @error('doctor')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                    <div class="form-group mt-1">
                        <label for=""> <i class="fa fa-calendar"></i> Select Day </label>
                        <input type="date" name="day" class="form-control" />
                        @error('day')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                    <div class="form-group mt-1">
                        <label for=""> <i class="fa fa-calendar"></i> Time Slot </label>
                        <input type="time" name="dayslot" class="form-control" />
                        @error('dayslot')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm rounded-0 float-end"> <i class="fa fa-arrow-right"></i> Create Appointment </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection