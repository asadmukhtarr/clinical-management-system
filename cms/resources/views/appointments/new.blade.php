@extends('layouts.head')
@section('title','New Appointment')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form action="{{ route('save.appointment') }}" method="post">
                @csrf
                <div class="card rounded-0 mt-3">
                    <div class="card-header bg-danger text-white ">
                        <i class="fa fa-plus-circle"></i> Create New Appiontment
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><i class="fa fa-user-circle"></i> Select Patient</label>
                            <select  name="patient" id="" class="form-control rounded-0 mt-1">
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
                            <select  name="Specialty" id="" class="form-control rounded-0 mt-1">
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
                            <select  name="doctor" id="" class="form-control rounded-0 mt-1">
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
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card mt-3 rounded-0">
                <div class="card-header bg-danger text-white">
                    <i class="fa fa-users"></i> Appointments
                </div>
                <table class="table table-bordered table-hover table-stripped">
                    <tr>
                        <th><i class="fa fa-hashtag"></i></th>
                        <th><i class="fa fa-user"></i> Patient</th>
                        <th><i class="fa fa-user-md"></i> Doctor</th>
                        <th><i class="fa fa-calendar"></i> Appointment Details</th>
                        <th><i class="fa fa-check-circle"></i> Status</th>
                    </tr>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient->name }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>On {{ $appointment->day }} at {{ $appointment->slot }}</td>
                        <td>
                            @if($appointment->status == 0)
                            <span class="badge bg-success">Active</span>
                            @else 
                            <span class="badge bg-danger">Closed</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection