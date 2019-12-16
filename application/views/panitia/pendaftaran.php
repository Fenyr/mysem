<style type="text/css">
    .mta{
    margin-top: 80px;
    }
</style>
<div class="mta">
    <hr>
</div>
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
                                <li class="nav-item">List Seminar</li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">

                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Nama Seminar</th>
                                                    <th>Transaksi</th>
                                                </tr>
                                            </thead>
                                            
                                            <?php foreach ($si -> result() as $s): ?>
                                                <tr>
                                                    <td><a href="<?php echo base_url('panitia/transaksi/'.$s->id_sem); ?>"><?php echo $s->judul; ?></a></td>
                                                    <td><a href="<?php echo base_url('panitia/transaksi/'.$s->id_sem); ?>">Lihat Transaksi </a>
                                                        <!-- <span class="badge badge-warning">!</span> -->
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            
                                        </table>
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
                            <h5 class="title">Data Seminar</h5>
                            <div class="widget-content">
                                <p><?php echo $si->num_rows() ?> Seminar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
