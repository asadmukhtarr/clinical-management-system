<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login System</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand " href="home.php"> <i class="fa fa-shield" aria-hidden="true"></i> Security System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="home.php"> <i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> My Acount
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php">Login </a></li>
                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>