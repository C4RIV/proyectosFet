<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Banco De Proyectos <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Proyectos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sección Proyectos:</h6>
            <a class="collapse-item" href="#">Quiero un Proyecto</a>
            <a class="collapse-item" href="#">Proponer Proyecto</a>
            <a class="collapse-item" href="#">Proyectos Realizados</a>
            <a class="collapse-item" href="#">Subir avance</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Materiales</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Materiales a disposición:</h6>
            <a class="collapse-item" href="#">Imágenes</a>
            <a class="collapse-item" href="#">Vídeos</a>
            <a class="collapse-item" href="#">Formatos Ofimáticos</a>
            <a class="collapse-item" href="#">Otros</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">




      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Camilo Rivera</span>
                <img class="img-profile rounded-circle" src="img/camilo-perf.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuraciones
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Novedades</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
          </div>

          <!-- inicio cards -->
          <main class="main-content p-5" role="main">
            <div class="row">
              <div class="container">
                <div class="card">
                  <div class="card-header font-weight-bold text-success">
                    Proyecto
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Desarrollo Plataforma Programa Alimentos</h5>
                    <p class="card-text">Desarrollar plataforma de banco de proyectos para el programa de alimentos.</p>
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-dame-proyecto">Dame el proyecto</a>
                  </div>
                </div>

              </div>

            </div>

            <div class="row">
              <div class="container">
                <div class="card">
                  <div class="card-header font-weight-bold text-success">
                    Proyecto
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Gennerador de contraseñas nuevos estudiantes</h5>
                    <p class="card-text">Se necesita desarrollar un software que genere contraseñas a partir de su primer nombre,
                      primer apellido y 3 últimos dígitos de su Cédula o Tarjeta de Id.</p>
                    <a href="#" class="btn btn-success">Dame el proyecto</a>
                  </div>
                </div>

              </div>

            </div>
          </main>

          <!-- inicio modal tomar proyecto -->
          <div class="modal" tabindex="-1" role="dialog" id="modal-dame-proyecto">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Registro proyecto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="container" id="advanced-search-form">
                      <h2>Registro Avanzado</h2>
                      <form>
                          <div class="form-group">
                              <label for="first-name">Primer Nombre</label>
                              <input type="text" class="form-control" placeholder="" id="first-name">
                          </div>
                          <div class="form-group">
                              <label for="first-name">Segundo Nombre</label>
                              <input type="text" class="form-control" placeholder="" id="Second-name">
                          </div>
                          <div class="form-group">
                              <label for="last-name">Primer Apellido</label>
                              <input type="text" class="form-control" placeholder="" id="last-name">
                          </div>
                          <div class="form-group">
                              <label for="country">Segundo Apellido</label>
                              <input type="text" class="form-control" placeholder="" id="seccond-last-name">
                          </div>
                          <div class="form-group">
                              <label for="country">No. Identificación</label>
                              <input type="number" class="form-control" placeholder="" id="Num-ide">
                          </div>
                          <div class="form-group">
                              <label for="number">Numero de Contacto</label>
                              <input type="text" class="form-control" placeholder="" id="number">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" placeholder="" id="email">
                          </div>
                          <div class="form-group">
                              <label for="category">Ciclo</label>
                              <select class="form-control" name="opcionarea" id="category">
                                <option>Técnico</option>
                                <option>Tecnólogo</option>
                                <option>Profesional</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="education">Rol</label>
                              <select class="form-control">
                                <option>Developer / Diseñador web</option>
                                <option>Pruebas / errores</option>
                                <option>Documentación</option>
                              </select>
                          </div>
                          <div class="clearfix"></div>
                          <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-ok ">
                          </span> Registrar </button>
                      </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-success">Tomar Proyecto</button>
                </div>
              </div>
            </div>
          </div>
          <!-- final modal tomar proyecto -->
          <!-- fin cards -->



      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Horus Services</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Estas seguro de salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccciona "salir" para finalizar el proceso.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.php">salir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
