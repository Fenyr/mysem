    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?= base_url('asset/img/blog-img/bg2.jpg') ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <h3>Selamat Datang</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                    

                        <!-- Catagory Area -->
                        <div class="world-catagory-area mt-2">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">Postingan Saya</li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="nav-item ml-5"></li>
                                <li class="ml-5"><button class="btn btn-warning" id="add">Buat Postingan</button></li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                         <?php if ($sp -> num_rows() > 0): ?>
                                            <?php foreach ($sp -> result() as $s): ?>
                                                   <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="<?php echo base_url('asset/img/blog-img/b2.jpg')?>" alt="">
                                                            <!-- Catagory -->
                                                            <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                                <h5><?php echo $s->judul; ?></h5>
                                                            </a>

                                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                            <p><?php echo substr($s->deskripsi,0,80); ?> <a href='#'>Readmore.....</a></p>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <span>
                                                                    <button class="btn btn-outline-primary">Edit</button>  
                                                                </span>
                                                                <span>
                                                                    <button class="btn btn-outline-danger">Request Delete</button>  
                                                                </span>
                                                                <span>
                                                                </span>

                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach ?>
                                            <?php endif ?>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <script type="text/javascript">
                  $("#add").click(function(){
                    $("#addf").modal();
                  });
                </script>
                <div class="modal fade" id="addf" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?php echo base_url('admin/add');?>">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Masukan Username" name="us">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password" name="pw">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tentang Seminar</h5>
                            <div class="widget-content">
                                <p>Seminar merupakan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Load More btn -->
            <div class="row">
                <div class="col-8">
                    <div class="load-more-btn mt-2 md-5 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
