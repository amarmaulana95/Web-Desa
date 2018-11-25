
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
                    <h2>Tabel admin<small></h2>
                    <div class="clearfix"></div>
                    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Pengumuman</a>
                  </div>
                  <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                   <thead>
                    <tr>
                    <th style="width:90px;">#</th>
                    <th>Agenda</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                    </tr>
                    </thead>
                      <tbody>
                      <?php
                        $no=0;
                          foreach ($data->result_array() as $i) :
                             $no++;
                             $agenda_id=$i['agenda_id'];
                             $agenda_nama=$i['agenda_nama'];
                             $agenda_deskripsi=$i['agenda_deskripsi'];
                             $agenda_mulai=$i['agenda_mulai'];
                             $agenda_selesai=$i['agenda_selesai'];
                             $agenda_tempat=$i['agenda_tempat'];
                             $agenda_waktu=$i['agenda_waktu'];
                             $agenda_keterangan=$i['agenda_keterangan'];
                             $agenda_author=$i['agenda_author'];
                             $tanggal=$i['tanggal'];
                          ?>
                      <tr>
                        <td><?php echo $tanggal;?></td>
                        <td><?php echo $agenda_nama;?></td>
                        <td><?php echo $agenda_mulai.' s/d '.$agenda_selesai;?></td>
                        <td><?php echo $agenda_tempat;?></td>
                        <td><?php echo $agenda_waktu;?></td>
                        <td><?php echo $agenda_author;?></td>
                        <td style="text-align:right;">
                              <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $agenda_id;?>"><span class="fa fa-pencil"></span></a>
                              <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $agenda_id;?>"><span class="fa fa-trash"></span></a>
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
        <!--sampe sini-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/simpan_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                          <div class="col-sm-7">
                            <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" autocomplete="off" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                          <div class="col-sm-7">
                            <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                        <div class="col-sm-7">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="xmulai" class="form-control pull-right" id="datepicker" autocomplete="off" required>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                      <!-- Date range -->
                      <div class="form-group">
                       <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                        <div class="col-sm-7">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="xselesai" class="form-control pull-right" id="datepicker2" autocomplete="off" required>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                          <div class="col-sm-7">
                            <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                          <div class="col-sm-7">
                              <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                          <div class="col-sm-7">
                            <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /page content -->
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
    <?php $this->load->view('layoutadm/js'); ?>


    <?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Agenda Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#1abb9c'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Agenda berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Agenda Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
    <!-- /Datatables -->
  </body>
</html>