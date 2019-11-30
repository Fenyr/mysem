    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(<?php echo base_url('asset/img/blog-img/b2.jpg')?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <?php foreach ($sem -> result() as $g): ?>
                        <div class="single-blog-title text-center">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#"><?php echo $g->keterangan; ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Hero Area End ********** -->

        <div class="main-content-wrapper section-padding-100">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- ============= Post Content Area ============= -->

                    <div class="col-12 col-lg-8">
                        <div class="single-blog-content mb-100">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Diposting Pada <a href="#" class="post-date"><?php echo $g->created; ?></a></p>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <h6><?php echo $g->deskripsi; ?></h6>
                                        <!-- <blockquote class="mb-30">
                                            <h6>isi...</h6>
                                            <div class="post-author">
                                                <p>Author</p>
                                            </div>
                                        </blockquote> -->
                                        <!-- <h6>Isi...</h6> -->
                                        <!-- Post Tags -->
                                        <ul class="post-tags">
                                            <li><a href="#"><?php echo $g->keterangan; ?></a></li>
                                        </ul>
                                        <!-- Post Meta -->
                                        <div class="post-meta second-part">
                                            <p>Dipost Oleh : <a href="#" class="post-author"><?php echo $g->username; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ========== Sidebar Area ========== -->
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="post-sidebar-area mb-100">
                                    <!-- Widget Area -->
                                    <div class="sidebar-widget-area">
                                        <h5 class="title">Informasi Seminar</h5>

                                        <div class="row widget-content">
                                            <span>
                                                <p>Speaker : <?php echo $g->speaker; ?></p>
                                                <p>Waktu : <?php echo $g->waktu; ?></p>
                                                <p>Fasilitas : <?php echo $g->fasilitas; ?></p>
                                            </span>

                                            <caption>Pendaftaran</caption>                                           
                                            <table class="table">
                                                <?php if ($daf -> num_rows()>0): ?>
                                                <?php foreach ($daf -> result() as $d): ?>
                                                    <?php if ($d->status == 1): ?>
                                                        <tr>
                                                        <td><button class="btn btn-outline-secondary">Status Pendaftaran <span class="badge badge-warning">Menunggu Pembayaran</span></button></td>
                                                        </tr>
                                                    <?php endif ?>
                                                    <?php if ($d->status == 2): ?>
                                                        <tr>
                                                        <td><button class="btn btn-outline-secondary">Status Pendaftaran <span class="badge badge-success">Terdaftar</span></button></td>
                                                        </tr>
                                                    <?php endif ?>
                                                                                        
                                                <?php endforeach ?>                                    
                                               
                                            <?php endif ?>


                                            <?php if ($daf -> num_rows()==0): ?>
                                                <tr>
                                                <td>Daftar Sekarang</td>
                                                <td>                                     
                                                    <a href="<?php echo base_url('user/daftar/'.$this->session->userdata('id')."/".$g->id_sem) ?>"><button class="btn btn-primary">Gratis</button>
                                                    </td>
                                                </tr>
                                                <?php endif ?>

                                        </table>

                                    </div>
                                </div>
                            <?php endforeach ?>
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="post-a-comment-area mt-10">
                            <h5>Beri Komentar</h5>
                            <!-- Contact Form -->
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="group">
                                            <textarea name="message" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Masukkan Komentar</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn world-btn">Posting Komentar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8">
                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mt-70">
                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <!-- Comment Meta -->
                                        <div class="comment-meta d-flex align-items-center justify-content-between">
                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            <a href="#" class="comment-reply btn world-btn">Reply</a>
                                        </div>
                                        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <!-- Comment Meta -->
                                                <div class="comment-meta d-flex align-items-center justify-content-between">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    <a href="#" class="comment-reply btn world-btn">Reply</a>
                                                </div>
                                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <!-- Comment Meta -->
                                        <div class="comment-meta d-flex align-items-center justify-content-between">
                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            <a href="#" class="comment-reply btn world-btn">Reply</a>
                                        </div>
                                        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                    </div>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>