<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MonoCyber Admin| </title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/admin/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="<?=base_url();?>assets/admin/css/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Halaman Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>admin/">Halaman Utama</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Action <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>admin/beranda/form_visimisi">Edit Visi Misi</a></li>
                      <li><a href="<?=base_url();?>admin/beranda/form_karyawan"> Tambah Karyawan</a></li>

                    </ul>
                  </li>
                
                  
                  
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

    
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                 <a href="<?=base_url()?>Admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                 
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php
  $this->load->view($content);
?>


        <!-- footer content -->
        <footer>
          <div class="pull-right">
          Kalliskivi Team
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/admin/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url();?>assets/admin/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url();?>assets/admin/js/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url();?>assets/admin/js/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/admin/js/custom.min.js"></script>
  </body>
</html>