<div class="container">
    <h3 class="mb-3">Edit peminjam : <?= $data['pinjam']['nama_peminjam'] ?></h3>
    <form action="<?= BASE_URL ?>/pinjam/updatePinjam" method="post">
<div class="class-body">
    <input type="hidden" name="id" value="<?= $data['pinjam']['id'] ?>">
    <div class="form-group mb-3">
        <label for="nama_peminjam">Nama Peminjam :</label>
        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['pinjam']['nama_peminjam'] ?>">
    </div>
    <div class="form-group mb-3">
    <label for="jenis_barang">Jenis barang :</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $data['pinjam']['jenis_barang'] ?>">
    </div>
    <div class="form-group mb-3">
    <label for="no_barang">No Barang :</label>
        <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['pinjam']['no_barang'] ?>">
    </div>
    <div class="form-group mb-3">
    <label for="tgl_pinjam">Tanggal Pinjam :</label>
        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam'] ?>">
    </div>
    <div class="form-group mb-3">
    <label for="tgl_kembali">Tanggal Kembali :</label>
        <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['pinjam']['tgl_kembali'] ?>">
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>