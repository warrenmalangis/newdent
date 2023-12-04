
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Dent-Click</title>

    <!-- Include the Google Fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="home/css/home.css">
    <style>
        body {
    background-image: url('images/background.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo-dental 2.png" alt="Logo" height="40"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-md-3" href="#" id="registerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </a>
                        <div class="dropdown-menu transparent-dropdown" aria-labelledby="registerDropdown">
                            <a class="dropdown-item" href="signup-pat.php">Patient</a>
                            <a class="dropdown-item" href="signup-dent-prof.php">Dental Proffesional</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-md-3" href="#">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <a class="btn login-btn mr-md-2 btn-bold" href="#">Login</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn signup-btn btn-bold" href="get-started.php">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <h1>Your Perfect Smile <br>Starts here</h1>
    <p class="center-text">Simplify your oral health: Smooth <br> Operations, Brighter Smiles!</p>
    <div class="text-center">
        <a class="btn get-started-btn" href="get-started.php">Get Started</a>
    </div>

    <div class="container mt-0">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center">
            <div class="img-container">
                <img src="images/vector_dental-removebg-preview.png" alt="Doctor Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>