
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="ARTISTA, Site web de Nekena concernant l'IA">
    <title>FRONT</title>
    <link rel="stylesheet" href="assets/Acc_Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/Acc_Admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/Acc_Admin/css/checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/Login/js/test.css">
</head>
<body id="page-top">
  <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-green);">
      <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
          <div class="sidebar-brand-text mx-3"><span>IA ARTISTA</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/lister') }}"><i class="fas fa-edit"></i><span>Voir Informations&nbsp;</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/info') }}"><i class="fas fa-edit"></i><span>Ajouter Information&nbsp;</span></a>
          </li>
          
        </ul>
        
      </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
          <div class="container-fluid">
            <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
            <span style="color: rgb(0,0,0);font-weight: bold;font-size: 20px;">ARTISTA</span>
            <ul class="navbar-nav flex-nowrap ms-auto">
              <li class="nav-item dropdown d-sm-none no-arrow">
                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="me-auto navbar-search w-100">
                    <div class="input-group">
                      <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                      <div class="input-group-append">
                        <button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <div class="d-none d-sm-block topbar-divider"></div>
            </ul>
            <a class="btn btn-primary" href="#" style="background: rgb(255,255,255);color: var(--bs-blue);border-style: none;"><i class="fas fa-sign-out-alt"></i></a>
          </div>
        </nav>
        <div class="container-fluid">
          <!-- Technology theme content -->
          <div class="technology-content">
            <h1>Welcome to the ARTISTA</h1>
            <p>This is the body of the website for the IA theme.</p>
            <!-- Add your content here -->
          </div>
        </div>
        
      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
    </div>
  </div>
  <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/Acc_Admin/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
  <script src="assets/Acc_Admin/js/theme.js"></script>
</body>
<style>
  body {
    background-color: #eaf5f4;
  }

  #wrapper {
    overflow-x: hidden;
  }

  .sidebar {
    background-color: var(--bs-green);
  }

  .sidebar-brand span {
    color: var(--bs-white);
  }

  .sidebar-divider {
    background-color: var(--bs-white);
  }

  .navbar {
    background-color: var(--bs-white);
  }

  .topbar-divider {
    border-color: var(--bs-gray);
  }

  .navbar-brand span {
    color: var(--bs-black);
  }

  .nav-link {
    color: var(--bs-white);
  }

  .nav-link:hover {
    color: var(--bs-white);
  }

  .btn-primary {
    background-color: var(--bs-blue);
    color: var(--bs-gray);
    border-style: none;
  }

  .scroll-to-top {
    background-color: var(--bs-white);
    color: var(--bs-gray);
  }

  .scroll-to-top:hover {
    background-color: var(--bs-white);
    color: var(--bs-gray);
  }

  .sticky-footer {
    background-color: var(--bs-white);
  }

  .sticky-footer span {
    color: var(--bs-black);
  }

  /* Additional styles for responsiveness */
  @media (max-width: 576px) {
    .sidebar {
      position: fixed;
    }

    #content-wrapper {
      margin-left: 0;
    }

    #content {
      padding-top: 56px;
    }
  }
</style>
    <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Acc_Admin/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="assets/Acc_Admin/js/theme.js"></script>
</body>
</html>


</html>




