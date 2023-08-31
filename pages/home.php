<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for this template */
    body {
      overflow-x: hidden;
    }

    .sidebar-heading {
      padding: 0.875rem 1.25rem;
      font-size: 1.2rem;
    }

    #wrapper {
      display: flex;
    }

    #sidebar-wrapper {
      min-height: 100vh;
      width: 15rem;
      -webkit-transition: width 0.25s ease;
      -moz-transition: width 0.25s ease;
      -o-transition: width 0.25s ease;
      transition: width 0.25s ease;
    }

    #page-content-wrapper {
      flex: 1;
      min-width: 0;
    }

    @media (max-width: 768px) {
      #wrapper {
        flex-direction: column;
      }

      #sidebar-wrapper {
        width: 100%;
        margin-top: 3.5rem;
        /* Space for the button */
        position: absolute;
        transform: translateX(-100%);
        transition: transform 0.25s ease;
      }

      #wrapper.show-sidebar #sidebar-wrapper {
        transform: translateX(0);
      }
    }
  </style>
</head>

<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Wanderson Pereira</div>

      <div class="list-group list-group-flush">
        <div style="padding: 8px 16px;">
          <img src="../public/img/Vector.png" alt="" width="100">
        </div>
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-success d-block d-md-none m-2" id="menu-toggle">Menu</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <!-- Add more navigation items here -->
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <h1 class="mt-4">Bootstrap Sidebar</h1>
        <p>A sidebar template with a toggle button.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
      document.getElementById("wrapper").classList.toggle("show-sidebar");
    });
  </script>
</body>

</html>