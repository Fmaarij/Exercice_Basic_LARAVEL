<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <!-- Bootstrap CSS -->
             <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

             <!-- Bootstrap Bundle with Popper -->
             <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <title>Header</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Menu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="welcome">Welcome</a>
        </li>
            </ul>
          </div>
        </div>
      </nav>

</body>
</html>
