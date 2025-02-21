@extends('layouts.head')
@section('title','Patients')
@section('body')
@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
  <strong>Success!</strong> {{ $message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection