<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard |</span></a>
    </div>

    <div class="clearfix"></div>
      <?php
        $id_admin=$this->session->userdata('idadmin');
        $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
        $c=$q->row_array();
      ?>
    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="<?php echo base_url().'assets/img/'.$c['pengguna_photo'];?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Hallow,</span>
        <h2><?php echo $c['pengguna_nama'];?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>------------------------------------------------</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-rocket"></i>Data Berita<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
             <li><a href="<?php echo base_url('admin/tulisan');?>">List Berita</a></li>
              <li><a href="<?php echo base_url('admin/tulisan/add_tulisan');?>">Post Berita</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Data admin <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
             <li><a href="<?php echo base_url('admin/pengguna');?>">Data admin</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bullhorn"></i>Pengumuman<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url('admin/pengumuman');?>">Tampil</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('admin/agenda');?>"><i class="fa fa-calendar-o"></i> Agenda <span class="label label-success pull-right">Hari ini</span></a></li>
          <li><a href="<?php echo base_url('admin/agenda');?>"><i class="fa fa-camera-retro"></i> Galery Desa <span class="label label-success pull-right">Hari ini</span></a></li>
          <li><a href="<?php echo base_url('admin/agenda');?>"><i class="fa fa-calendar-o"></i> Data Pegawai <span class="label label-success pull-right">Hari ini</span></a></li>
          <li><a href="<?php echo base_url('admin/agenda');?>"><i class="fa fa-envelope-o"></i> Inbox <span class="label label-success pull-right">Hari ini</span></a></li>
          <li><a href="<?php echo base_url('admin/agenda');?>"><i class="fa fa-folder"></i> File <span class="label label-success pull-right">Hari ini</span></a></li>
           <li><a href="javascript:void(0)"><i class="fa fa-comments"></i> Komentar</a></li>
           <li><a href="javascript:void(0)"><i class="fa fa-send"></i> Logout</a></li>
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
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
