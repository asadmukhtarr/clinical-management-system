@extends('layouts.head')
@section('title','Patients')
@section('body')
@include('includes.flash')
<div class="card mt-3">
    <div class="card-header bg-danger text-white">
        <i class="fa fa-stethoscope"></i> Edit Specialites
    </div>
    <form action="{{ route('special.update',$special->id) }}" method="post">
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
                        <input type="text" value="{{ $special->title }}" class="form-control" name="title" placeholder="Enter something">
                        @error('title')
                        <font color="red">{{ $message }}</font>
                        @enderror
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection