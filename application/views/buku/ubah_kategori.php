<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->flashdata('pesan', '<div class ="alert alert-danger alert-message" role = "alert"> Nama Kategori tidak boleh kosong </div>');
                redirect('buku/ubahkategori/' . $k['id']);
            } ?>
            <?php foreach ($kategori as $k) { ?>
                <form action="<?= base_url('buku/ubahKategori'); ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?= $k['id']; ?>">
                        <input type="text" class="form-control form-control-user" name="kategori" id="kategori" value="<?= $k['kategori']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>