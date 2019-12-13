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
                        <u><h4>Tambah Data Seminar</h4></u><br>
                        <div class="bg-danger">
                            <?php $this->upload->display_errors('<span style="color: white; padding: 10px;">', '</span><br>');
                            echo validation_errors('<span style="color: white; padding: 10px;">', '</span><br>');?>
                        </div>
                        <form enctype="multipart/form-data" method="POST" action="<?php echo site_url('panitia/tambah');?>">
                            <div class="row">
                                <div class="col">
                                    <label>Judul</label>
                                <input type="text" name="judul" value="<?=$judul?>" class="form-control">
                                </div>
                                <div class="col">
                                <label>Speaker</label>
                                <input type="text" name="speaker" value="<?=$speaker?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3"><?=$deskripsi?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Acara</label>
                                <input type="datetime-local" name="tanggal" value="<?=$tanggal?>" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Foto</label>
                                <input type="file" name="foto" value="<?=$foto?>" class="form-control">
                                </div>
                                <div class="col">
                                <label>Lokasi</label>
                                <input type="text" name="lokasi" value="<?=$lokasi?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                <div class="col">
                                    <label>Fasilitas</label>
                                    <input type="text" name="fasilitas" value="<?=$fasilitas?>" class="form-control">
                                </div>
                                <div class="col">
                                <label>Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <?php foreach ($kt -> result() as $k): ?>
                                            <option <?php if ($k->id==$kategori) echo "selected"; ?> value="<?=$k->id?>"><?php echo $k->keterangan ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
