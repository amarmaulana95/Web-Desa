
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('layoutadm/css'); ?>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- sidebar menu -->
        <?php $this->load->view('layoutadm/sidebar'); ?>
        <!-- /sidebar menu -->
        <!-- top navigation -->
        <?php $this->load->view('layoutadm/top_navbar'); ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="clearfix"></div>
                <form action="<?php echo base_url('admin/tulisan/simpan_tulisan');?>" method="post" enctype="multipart/form-data">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Tambah Berita</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-md-10 col-sm-12 col-xs-12 form-group">
                        <input type="text" name="xjudul" placeholder="Judul" autocomplete="off" class="form-control">
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                          <button type="submit" class="btn btn-success"><span class="fa fa-pencil"></span>Publish</button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--batas-->
                  <div class="row">
                    <div class="col-md-8 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Text areas<small>Sessions</small></h2>
                            <div class="clearfix"></div>
                        </div>
                          <textarea id="ckeditor" name="xisi" class="form-control" required></textarea><br/>
                          <div class="clearfix"></div>
                      </div>
                    </div>
                    <!--batas-->
                    <div class="col-md-4 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Kategori berita</h2>
                          <div class="clearfix"></div>
                        </div>
                        <select class="form-control" name="xkategori" required>
                          <option value="">-Pilih-</option>
                            <?php
                              $no=0;
                              foreach ($kat->result_array() as $i) :
                              $no++;
                                 $kategori_id=$i['kategori_id'];
                                 $kategori_nama=$i['kategori_nama'];
                              ?>
                          <option value="<?php echo $kategori_id;?>"><?php echo $kategori_nama;?></option>
                          <?php endforeach;?>
                        </select>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="filefoto" required>
                        </div>
                      </div>
                    </div>
                  <!--batas-->
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <?php $this->load->view('layoutadm/js'); ?>
   
    <!-- /Datatables -->
  </body>
</html>