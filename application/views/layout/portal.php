
<?php
    error_reporting(0);
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }

?>
<section class="text-center py-5 grey lighten-3" id="about">
  <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
             <h3 class="text-center h1 my-4">Berita Desa</h3>
               <hr>
               <div class="card-group">
                  <?php foreach ($artikel->result() as $row) :?>
                    <div class="col-md-3 col-sm-2 col-lg-3">
                      <div class="card-deck">
                          <div class="card">
                            <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Card image cap">
                              <div class="card-body">
                                <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                                <h5 style="text-align:center;"><?php echo limit_words($row->tulisan_judul, 5).'...';?></h5>
                                </a>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                              <div class="card-footer">
                                <a href="#" class="btn btn-primary btn-sm">Lihat disini</a>
                              </div>
                          </div>
                      </div>
                    </div>
                  <?php endforeach;?>
              </div>
            </div>
        </div>
    </div>
  </div><br>
  <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-primary btn-courses">View More</a>
            </div>
        </div>
</section>

<section class="py-5 indigo darken-1 text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Agenda Desa</h2>
      <p class="mb-3 pb-3 lead">
        Wujudkan Desa yang maju, bermasyarakat, bersih dan bebas korupsi
      </p>
    </div>
      <div class="list-group col-md-8">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
          <h5 class="mb-1">Upadate Terbaru</h5>
        </a>
        <?php foreach ($agenda->result() as $row):?>
        <a href="<?php echo site_url('agenda');?>" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5><b><?php echo $row->agenda_nama;?></b></h5>
          </div>
          <p class="mb-1"><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
          <small><span style="color: blue;"><?php echo date("d M Y", strtotime($row->agenda_tanggal));?></small>
        </a>
        <?php endforeach; ?>
      </div>
  </div>
</section>


<section class="py-5" id="projects">
  <div class="container">
    <div class="wow fadeIn">
     <div class="row">
        <div class="col-sm">
          <div class="row mb-3">
            <?php foreach ($pengumuman->result() as $row) :?>
            <div class="col-1 mr-1"><i class="fa fa-bullhorn fa-2x indigo-text"></i></div>
            <div class="col-10">
              <h5 class="font-bold"><?php echo $row->pengumuman_judul;?></h5>
              <span><?php echo $row->tanggal;?></span>
              <p class="grey-text">
                <?php echo limit_words($row->pengumuman_deskripsi,10).'...';?>
              </p>
              <hr>
            </div>
          <?php endforeach;?>
          </div>
        </div>
        <div class="col-sm">
          <div class="list-group col-md-12">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active"><h5 class="mb-1">Upadate Terbaru</h5></a>
              <?php foreach ($agenda->result() as $row):?>
              <a href="<?php echo site_url('agenda');?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5><b><?php echo $row->agenda_nama;?></b></h5>
                </div>
                <p class="mb-1"><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                  <small><span style="color: blue;"><?php echo date("d M Y", strtotime($row->agenda_tanggal));?></small>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
</section>



<section class="py-5" id="projects">
  <div class="container">
    <div class="wow fadeIn">
      <div class="alert alert-primary" role="alert">
        <h2 class="h1 pt-5 pb-3">Pengumuman</h2>
        <p class="mb-3 pb-3 lead">
       Apakabar hari ini, Yuk intip Disini ................ 
      </p>
      </div>
    </div>
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5">
        <img class="float-right" src="<?php echo base_url(); ?>assets/img/orang.png" widht="220" height="500"/>
      </div>
        <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
          <div class="row mb-3">
            <?php foreach ($pengumuman->result() as $row) :?>
            <div class="col-1 mr-1"><i class="fa fa-bullhorn fa-2x indigo-text"></i></div>
            <div class="col-10">
              <h5 class="font-bold"><?php echo $row->pengumuman_judul;?></h5>
              <span><?php echo $row->tanggal;?></span>
              <p class="grey-text">
                <?php echo limit_words($row->pengumuman_deskripsi,10).'...';?>
              </p>
              <hr>
            </div>
          <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">Kepegawaian Desa</h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" height="240" widht="240"  src="<?php echo base_url(); ?>assets/img/amar.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Amar Maulana</div>
          <h6 class="font-bold blue-grey-text mb-4">Tukang Sapu</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@nicolewest</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="<?php echo base_url(); ?>assets/img/kimak.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Reski R</div>
          <h6 class="font-bold blue-grey-text mb-4">Sedot WC</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@hannahcruz</span></a>
        </div>
      </div>
    </div>
    <div class="row center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="<?php echo base_url(); ?>assets/img/man-1.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Mark Hall</div>
          <h6 class="font-bold blue-grey-text mb-4">Web Developer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@markhall</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="<?php echo base_url(); ?>assets/img/man-2.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Vincent Harris</div>
          <h6 class="font-bold blue-grey-text mb-4">Web Developer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@vincentharris</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" style="background-image:url('<?php echo base_url(); ?>assets/img/panorama-3094696_1920.jpg');">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Contact us</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
        </p>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form action="https://formspree.io/youremail@example.com" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="name" required="required"/>
                      <label for="name">Your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="text" name="_replyto" required="required"/>
                      <label for="email">Your email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="text" name="subject" required="required"/>
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                      <label for="message">Your message</label>
                    </div>
                  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Send</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                  <p class="mt-2">140, City Center, New York, U.S.A</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+ 01 234 567 89</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">contact@company.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







