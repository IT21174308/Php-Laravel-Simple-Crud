<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel CRUD Operation</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Ensure the body stretches to at least the full viewport height */
      margin: 0; /* Reset default margin */
      font-family: Arial, sans-serif; /* Optional: Set a default font */
    }


    header {
      padding: 1rem 0;
      background-color: #007bff;
      color: white;
      text-align: center;
    }

    footer {
      background-color: rgba(0, 0, 0, 0.05);
      text-align: center;
      padding: 1rem 0;
    }
  </style>
</head>
<body>

    <!-- Main content area -->
    <div class="content">
      <header>
        <h1>Student Information Management</h1>
      </header>

      <div class="container">
        <!-- Content specific to each page goes here -->
        @yield('content')
      </div>


    </div>
    <footer class="footer mt-auto">
        <div class="container">
          © 2024 Created by:
          <a href="https://github.com/IT21174308" class="text-body">Oshadhi Anjana Kumarasinghe</a>
        </div>
      </footer>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-EkEzDJGJmXUjnG5s6FpUoDxIM0Bt/ZrFMO17fF9buGJeM/nrFVYwnPDjyMZZmwY8" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-lrBdEaB6VrCVS0GKt6oCknyDIHj4Lq5om6f/YsOiVXEuy5sK8K9YtNP5vb5WV0E/" crossorigin="anonymous"></script>

  <!-- SweetAlert2 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
