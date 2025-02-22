@extends('layouts.head')
@section('Doctors','Dashboard')
@section('body')
<div class="row mt-4">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user-plus"></i> New Doctor 
            </div>
            <div class="card-body">
            <form action="submit.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="specialities_id" class="form-label">Speciality</label>
                    <select class="form-select" id="specialities_id" name="specialities_id">
                        <option value="">Select Speciality</option>
                        @foreach($specilities as $special)
                        <option value="{{ $special->id }}">{{ $special->title }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label for="picture" class="form-label">Upload Picture</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection