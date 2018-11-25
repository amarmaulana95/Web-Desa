<!DOCTYPE html>
<html class="full-height" lang="en-US">
<head>
  <?php $this->load->view('layout/css'); ?>
</head>

  <body id="top">
    <header>
      <?php $this->load->view('layout/nav'); ?>
    </header>
    
    <div id="content">
    <!--contenya-->
    <?php echo $contents; ?>
    <!--contennya-->
    </div>

      <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-5 flex-center"><a class="px-3"><i class="fa fa-facebook fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-twitter fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-google-plus fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-linkedin fa-lg white-text"></i></a></div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container-fluid">
            <p>&copy; <a href="/">Material Landing</a> - Design: <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></p>
          </div>
        </div>
      </footer>
      
    <?php $this->load->view('layout/js'); ?>
  </body>
</html>