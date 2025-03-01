@extends('layouts.head')
@section('title','Patients')
@section('body')
@include('includes.flash')
<div class="card mt-3">
    <div class="card-header bg-danger text-white">
        <i class="fa fa-stethoscope"></i> All Specialites
    </div>
    <form action="{{ route('specialites.save') }}" method="post">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">Enter Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="title" placeholder="Enter something">
                        @error('title')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr class="table-danger">
                <th>ID</th>
                <th>Name</th>
                <th>Doctors</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($specilities as $special)
            <tr>
                <td>{{ $special->id }}</td>
                <td>{{ $special->title }}</td>
                <td>
                    {{ $special->doctor->count() }}                    
                </td>
                <td>
                    <a href="{{  route('special.edit',$special->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('delete.special',$special->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection