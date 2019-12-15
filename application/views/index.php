<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo base_url('asset/img/blog-img/bg1.jpg')?>);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo base_url('asset/img/blog-img/bg2.jpg')?>);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo base_url('asset/img/blog-img/bg3.jpg')?>);"></div>
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>1</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">Apa Itu Seminar?</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>2</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">Apa Saja Fitur yang diberikan</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>3</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">Mengapa Harus Seminar?</a>
                            </div>
                        </div>
                    </div>
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
                    <div class="world-catagory-area mt-50">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="title">Trending</li>

                            <li class="nav-item">
                                <a class="nav-link active" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">Semua</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Teknologi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab12" data-toggle="tab" href="#world-tab-12" role="tab" aria-controls="world-tab-12" aria-selected="false">Ekonomi & Bisnis</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab13" data-toggle="tab" href="#world-tab-13" role="tab" aria-controls="world-tab-13" aria-selected="false">Pendidikan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tab14" data-toggle="tab" href="#world-tab-14" role="tab" aria-controls="world-tab-14" aria-selected="false">Sosial & Budaya</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lainnya</a>
                                <div class="dropdown-menu">
                                    <a class="nav-link" id="tab16" data-toggle="tab" href="#world-tab-15" role="tab" aria-controls="world-tab-16" aria-selected="false">Kesehatan</a>
                                    <a class="nav-link" id="tab17" data-toggle="tab" href="#world-tab-16" role="tab" aria-controls="world-tab-17" aria-selected="false">Politik</a>
                                </div>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2">

                            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                <div class="row">
                                    <?php foreach ($seminar -> result() as $s): ?>
                                     <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                           <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 1): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
                   </div>

                   <div class="tab-pane fade" id="world-tab-12" role="tabpanel" aria-labelledby="tab12">
                       <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 2): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
            </div>

            <div class="tab-pane fade" id="world-tab-13" role="tabpanel" aria-labelledby="tab13">
                <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 3): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
        </div>

        <div class="tab-pane fade" id="world-tab-14" role="tabpanel" aria-labelledby="tab14">
           <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 4): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
</div>

<div class="tab-pane fade" id="world-tab-15" role="tabpanel" aria-labelledby="tab15">
   <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 5): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
</div>

<div class="tab-pane fade" id="world-tab-16" role="tabpanel" aria-labelledby="tab16">
   <div class="row">
                            <?php $r=0; ?>
                            <?php foreach ($seminar -> result() as $s): ?>
                                <?php if ($s->kategori == 6): ?>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="<?php echo base_url('asset/img/upload/'.$s->foto)?>" alt="">
                                                <!-- Catagory -->
                                                <div class="post-cta"><a href="#"><?php echo $s->keterangan; ?></a></div>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="<?php echo base_url('user/post/'.$s->id_sem)?>" class="headline">
                                                    <h5><?php echo $s->judul; ?></h5>
                                                </a>
                                                <p><?php echo substr($s->deskripsi,0,80); ?><a href="<?php echo base_url('user/post/'.$s->id_sem)?>"> Readmore.....</a></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author"><?php echo $s->username; ?></a> Pada <a href="#" class="post-date"><?php echo $s->created; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $r=$r+1; ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if ($r==0): ?>
                               <div class="mx-auto my-auto">
                                   <h2>Tidak ada postingan</h2>
                               </div>  
                           <?php endif ?>
                            </div>
</div>


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
        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Tetap Terhubung</h5>
            <div class="widget-content">
                <div class="social-area d-flex justify-content-between">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Rekomendasi Hari Ini</h5>
            <div class="widget-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post todays-pick">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url('asset/img/blog-img/b22.jpg')?>" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content px-0 pb-0">
                        <a href="#" class="headline">
                            <h5>Judul</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row justify-content-center">
    <!-- ========== Single Blog Post ========== -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <img src="<?php echo base_url('asset/img/blog-img/b4.jpg')?>" alt="">
                <!-- Post Content -->
                <div class="post-content d-flex align-items-center justify-content-between">
                    <!-- Catagory -->
                    <div class="post-tag"><a href="#">Kategori</a></div>
                    <!-- Headline -->
                    <a href="#" class="headline">
                        <h5>Judul</h5>
                    </a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">UKM</a> Pada <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Single Blog Post ========== -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <img src="<?php echo base_url('asset/img/blog-img/b5.jpg')?>" alt="">
                <!-- Post Content -->
                <div class="post-content d-flex align-items-center justify-content-between">
                    <!-- Catagory -->
                    <div class="post-tag"><a href="#">Kategori</a></div>
                    <!-- Headline -->
                    <a href="#" class="headline">
                        <h5>Judul</h5>
                    </a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">UKM</a> Pada <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Single Blog Post ========== -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <img src="<?php echo base_url('asset/img/blog-img/b6.jpg')?>" alt="">
                <!-- Post Content -->
                <div class="post-content d-flex align-items-center justify-content-between">
                    <!-- Catagory -->
                    <div class="post-tag"><a href="#">Kategori</a></div>
                    <!-- Headline -->
                    <a href="#" class="headline">
                        <h5>Judul</h5>
                    </a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">UKM</a> Pada <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Load More btn -->
<div class="row">
    <div class="col-12">
        <div class="load-more-btn mt-50 text-center">
            <a href="#" class="btn world-btn">Load More</a>
        </div>
    </div>
</div>
</div>
</div>