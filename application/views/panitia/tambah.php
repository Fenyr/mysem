
    <div class="main-content-wrapper section-padding-100 mt-50">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <u><h4>Tambah Data Seminar</h4></u><br>
                        <form method="POST" action="#">
                            <div class="row">
                                <div class="col">
                                    <label>Judul</label>
                                <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="col">
                                <label>Speaker</label>
                                <input type="text" name="Speaker" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Acara</label>
                                <input type="datetime-local" name="Speaker" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                <div class="col">
                                    <label>Fasilitas</label>
                                    <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="col">
                                <label>Kategori</label>
                                    <select class="form-control">
                                        <?php foreach ($kt -> result() as $k): ?>
                                            <option><?php echo $k->keterangan ?></option>
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
