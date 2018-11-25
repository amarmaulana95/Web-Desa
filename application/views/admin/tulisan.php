
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Responsive example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                   <thead>
                      <tr>
                      <th style="width:90px;">Gambar</th>
                      <th>Judul</th>
                      <th>isi</th>
                      <th>Tanggal</th>
                      <th>Author</th>
                      <th>Baca</th>
                          <th>Kategori</th>
                          <th style="text-align:right;">Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php
                          $no=0;
                          foreach ($data->result_array() as $i) :
                             $no++;
                             $tulisan_id=$i['tulisan_id'];
                             $tulisan_judul=$i['tulisan_judul'];
                             $tulisan_isi=$i['tulisan_isi'];
                             $tulisan_tanggal=$i['tanggal'];
                             $tulisan_author=$i['tulisan_author'];
                             $tulisan_gambar=$i['tulisan_gambar'];
                             $tulisan_views=$i['tulisan_views'];
                             $kategori_nama=$i['tulisan_kategori_nama'];
                          ?>
                          <tr>
                            <td><img src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>" style="width:20px;"></td>
                            <td><?php echo $tulisan_judul;?></td>

                            <td><?php echo $tulisan_isi;?></td>
                            <td style="width:90px;"><?php echo $tulisan_tanggal;?></td>
                            <td><?php echo $tulisan_author;?></td>
                            <td><?php echo $tulisan_views;?></td>
                            <td><?php echo $kategori_nama;?></td>
                            <td style="text-align:right;">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/tulisan/get_edit/'.$tulisan_id;?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $tulisan_id;?>"><span class="fa fa-trash"></span></a>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        foreach ($data->result_array() as $i) :
          $tulisan_id=$i['tulisan_id'];
          $tulisan_judul=$i['tulisan_judul'];
          $tulisan_gambar=$i['tulisan_gambar'];
        ?>
        <!--Modal Hapus Pengguna-->
              <div class="modal fade" id="ModalHapus<?php echo $tulisan_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                              <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
                          </div>
                          <form class="form-horizontal" action="<?php echo base_url().'admin/tulisan/hapus_tulisan'?>" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                           <input type="hidden" name="kode" value="<?php echo $tulisan_id;?>"/>
                           <input type="hidden" value="<?php echo $tulisan_gambar;?>" name="gambar">
                                  <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $tulisan_judul;?></b> ?</p>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
          <?php endforeach;?>

          
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella<a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
   
    <script src="<?php echo base_url(); ?>theme/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>theme/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>theme/vendors/nprogress/nprogress.js"></script>

    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>theme/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>theme/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>