<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard Admin | </title>
    <?php $this->load->view('layoutadm/css'); ?>
  </head>
    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
        <?php $this->load->view('layoutadm/sidebar'); ?>
        
        <!-- top navigation -->
        <?php $this->load->view('layoutadm/top_navbar'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php echo $contents; ?>
        <!-- /page content -->
        
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    <?php $this->load->view('layoutadm/js'); ?>
    <!-- /gauge.js -->
  </body>
</html>