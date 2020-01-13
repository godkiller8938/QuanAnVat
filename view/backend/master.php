<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Quản trị! |Kỳ Quán </title>

    <!-- Bootstrap -->
    
    <link href="public/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="public/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/backend/build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript" src="public/backend/bootstrap4/ckeditor/ckeditor.js"></script>
    <style type="text/css">
    body{
      color: black;
      font-size: 14px;
    }
     .table-responsive>.table>tbody>tr>th, .table-responsive>.table>tbody>tr>td{
      white-space: normal;
      vertical-align: middle;
     }
    </style>
    <script type="text/javascript">
    setInterval(function(){
      $("#check_order").load("controller/backend/controller_order_ajax.php");
          }, 1000);
  </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="trang-chu" class="site_title"><i class="fa fa-home"></i> <span>Kỳ Quán</span></a>
            </div>

            <div class="clearfix"></div>
            <?php
              $user_session=$_SESSION['user'];
              $result = mysqli_query($db,"select * from tbl_user where user='$user_session'");
              $user_admin= mysqli_fetch_object($result);
             ?>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2><?php echo $user_admin->fullname; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=news">Tin tức</a></li>
                      <li><a href="admin.php?controller=ads">Quảng cáo</a></li>
                      <li><a href="admin.php?controller=contact">Liên hệ </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Khách hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=hot_customer">Khách hàng quen</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=category_product">Danh mục sản phẩm</a></li>
                      <li><a href="admin.php?controller=product&name=0">Danh sách món ăn</a></li>
                      <li><a href="admin.php?controller=product&name=1">Danh sách đồ uống</a></li>
                      <li><a href="admin.php?controller=product&name=2">Danh sách bánh ngọt</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=order_ing">Chưa giao hàng</a></li>
                      <li><a href="admin.php?controller=order">Đã giao hàng</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=user">Danh sách tài khoản</a></li>
                      
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Đăng xuất" href="admin.php?controller=logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    
                    <?php echo $user_admin->user; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin.php?controller=user">Thông tin</a></li>
                    <li><a href="admin.php?controller=logout"><i class="fa fa-sign-out pull-right"></i>Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div style="clear: both;">
            
          <?php 
          //kiem tra, neu file controller co ton tai thi load MVC do ra
          if(file_exists($controller) == true)
            include $controller;
          ?>
          </div>
        </div>

    <!-- jQuery -->
    <script src="public/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/backend/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="public/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/backend/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/backend/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="public/backend/vendors/moment/min/moment.min.js"></script> -->
    <script src="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/backend/build/js/custom.min.js"></script>
  
  </body>
</html>
