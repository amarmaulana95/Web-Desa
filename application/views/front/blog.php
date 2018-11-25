<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view('layout/css'); ?>
  <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
  ?>
  </head>

<body id="top">
  <header>
  <?php $this->load->view('layout/navbar'); ?>
  </header>

<div class="container">
  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <h2 class="my-4">Update
        <small>Kabar Desa</small>
      </h2>
      <?php echo $this->session->flashdata('msg');?>
      <?php foreach ($data->result() as $row) : ?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title"></h2>
         <h5><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></h5>
          <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on January 1, 2017 by
          <a href="#">Start Bootstrap</a>
        </div>
      </div>
      <?php endforeach;?>
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Kategori</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <?php foreach ($category->result() as $row) : ?>
              <ul class="list-unstyled mb-0">
                <li>
                 <a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?></a>
                </li>
              </ul>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <div class="col-md-12 order-md-2 mb-4">
          <br>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Populer Teratas</span>
            <span class="badge badge-secondary badge-pill">4</span>
          </h4>
          <?php foreach ($populer->result() as $row) :?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="col">
                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-featured-img">
              </div>
              <div class="col">
                <h6 class="my-0"><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></h6>
                <small class="text-muted"><?php echo limit_words($row->tulisan_isi,5).'...';?></small>
              </div>
            </li>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
  <!-- /.row -->
</div>
  <!-- /.container -->

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
      <p>&copy; <a href="/">Material Landing</a> - Design: <a href="" target="_blank">TemplateFlip</a></p>
    </div>
  </div>
</footer>
  <!--//END BLOG -->
  <!--============================= FOOTER =============================-->
<?php $this->load->view('layout/js'); ?>
</body>
</html>
