<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinical Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
        <i class="fa fa-ambulance"></i> CMS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Dashboard -->
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}">
              <i class="fa fa-dashboard"></i> Dashboard
            </a>
          </li>
          <!-- Patient Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link active" href="{{ route('patient') }}" role="button">
              <i class="fa fa-user"></i> Patient
            </a>
          </li>
          <!-- Doctors -->
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('doctors') }}">
              <i class="fa fa-user-md"></i> Doctors
            </a>
          </li>
          <!-- Specialties -->
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('specialites') }}">
              <i class="fa fa-stethoscope"></i> Specialties
            </a>
          </li>
          <!-- Appointment Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-calendar"></i> Appointment
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ route('new.appointment') }}">Create</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('all.appointment') }}">All Appointments</a>
              </li>
            </ul>
          </li>
          <!-- User Management Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-users"></i> User Management
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ route('create.user') }}">Create User</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('all.user') }}">All Users</a>
              </li>
            </ul>
          </li>
          <!-- Settings -->
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('settings') }}">
              <i class="fa fa-cog"></i> Settings
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">
    @yield('body')
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
