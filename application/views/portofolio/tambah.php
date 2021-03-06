<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="div row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    portofolio <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Portofolio
            </div>
            <div class="card-body">
                <?= form_open_multipart('portofolio/tambah'); ?>
                <!-- <input type="hidden" name="id_layanan" value="<?= $portofolio['id_portofolio']; ?>"> -->
                <!-- <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Aplikasi</option>
                            <option>Teknis</option>
                            <option>Toko</option>
                        </select>
                    </div> -->
                <div class="form-group">
                    <label for="kategori" style="font-size: 15px"><span>Jenis Kategori</span></label>
                    <input name="kategori" type="text" class="form-control" id="kategori">
                    <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
                </div>
                <div class="form-group">
                    <label for="judul" style="font-size: 15px"><span>Nama Portofolio</span></label>
                    <input name="judul" type="text" class="form-control" id="judul">
                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
                <div class="form-group">
                    <label for="detail" style="font-size: 15px"><span>Detail</span></label>
                    <input name="detail" type="text" class="form-control" id="detail">
                    <small class="form-text text-danger"><?= form_error('detail'); ?></small>
                </div>
                <div class="form-group">
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" size="20">
                    <small lass="form-text text-danger"><?= form_error('gambar'); ?></small>
                </div>
                <div class="form-group">
                    <img src="<?= base_url() ?>assets_p/image/portofolio/noimage.jpg" width="400px" id="image_load">
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm ">Tambah Portofolio</button>
                    <button type="button" class="btn btn-danger btn-sm float-right " data-dismiss="modal">Kembali</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

    <script>
        function preview(input) {
            if (input.files && input.files[0])
                var reader = new FileReader();
            reader.onload = function(e) {
                $('#image_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }

        $("#gambar").change(function() {
            preview(this);
        });
    </script>