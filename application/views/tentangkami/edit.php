<div class="container">
    <div class="card">
        <div class="card-header">
            Edit Visi
        </div>
        <div class="card-body">
            <form id="form" action="<?= base_url('tentangkami/tambah') ?>" method="post">
                <div class="form-group">
                    <label for="visi" style="font-size: 15px">Visi</label>
                    <input name="visi" type="text" class="form-control col-md-12 col-12" id="visi" value="<?= $visi['visiperusahaan'] ?>">
                    <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm ">Tambah Visi</button>
                    <button type="button" class="btn btn-danger btn-sm float-right " data-dismiss="modal">Kembali</button>

                </div>

            </form>
        </div>
    </div>
</div>