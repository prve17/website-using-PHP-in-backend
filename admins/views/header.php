<?php require_once dirname(__FILE__).'/../../config/route.php'; 
      if(!isset($_SESSION['user_id'])){
        setLocation('admins/');
      }
      // $logo = $this->model->getColumnName('company', 'logo', 'active', '1');

      
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DASHBOARD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo url; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo url; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo url; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo url; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="<?php echo url; ?>plugins/jquery/jquery.min.js"></script>
  <style type="text/css">
    .sidebar-dark-primary {
      background: #1F3F49 !important;
    }
    .main-sidebar .nav-item p, .main-sidebar .nav-item i {
      color: #fff;
    }

    .navbar{
      background-color: #1F3F49;
    }
    .navbar .fa-bars{
      color: #fff;
    }

    .my-bg{
      background-color: #1F3F49; 
    }

    .my-color{
      color: #1F3F49;
    }

    .my-bg-color{
      background-color: #1F3F49;
      color: #1F3F49;
    }

    .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
     background-color: #f4d6b5;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
   <!--  <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
     <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo url.'admins/controllers/Dashboard.php?action=dashboard'; ?>">
          <!-- <i class="fas fa-th-large"></i> -->
          <!-- <img src="<?php echo url.'uploads/configurations/'.$logo; ?>" width="120" height="39"> -->
          <span class="text-white font-weight-bold">Priya</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo url.'admins/controllers/Dashboard.php?action=dashboard'; ?>" class="brand-link">
      <img src="<?php echo url; ?>assets/images/logo_specss.png"
           alt="Yes Service Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">SPECSS</span>
      <!-- <img src="<?php echo url.'uploads/configurations/'.$logo; ?>" width="120" height="39"> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo url; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo url.'admins/controllers/Dashboard.php?action=dashboard'; ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           <!--  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Section Content
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo url.'users/controllers/Bill.php?action=listData'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo url.'users/controllers/OwnerBill.php?action=listData'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo url.'users/controllers/OwnerBill.php?action=listData'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courses Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo url.'users/controllers/OwnerBill.php?action=listData'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo url.'users/controllers/OwnerBill.php?action=listData'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Content</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="<?php echo url.'users/controllers/Employee.php?action=view'; ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo url.'admins/controllers/Admin.php?action=logout'; ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
