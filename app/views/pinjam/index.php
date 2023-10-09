<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <div class="d-flex justify-content-between">
    <div>
    <a href="<?= BASE_URL;?>/Buku/tambah" class="btn text-white" style="background-color: blue;"><i class="fa-solid fa-plus"></i> Peminjaman</a>
    </div>
    <div class="d-flex">
            <form action="<?= BASE_URL; ?>/buku/cari" method="post" class="d-flex">
                <input type="text" class="form-control" name="search" placeholder="Cari Peminjam...">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            <a href="<?= BASE_URL; ?>/buku/index" class="btn btn-secondary">Reset</a>
        </div>
    </div>

    <br>
    <br>    
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama peminjam</th>
                <th scope="col">Jenis barang</th>
                <th scope="col">Nomor barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1;?>
            <?php foreach ($data['pinjam'] as $row) :?>
                <tr>
                  <td><center><?= $no; ?></center></td>  
                  <td><?= $row['nama_peminjam']; ?></td>  
                  <td><?= $row['jenis_barang']; ?></td>  
                  <td><?= $row['no_barang']; ?></td>  
                  <td><?= $row['tgl_pinjam']; ?></td>  
                  <td><?= $row['tgl_kembali']; ?></td>  
                  <td>
                    <?php
                        $tgl_kembali = strtotime($row["tgl_kembali"]);
                        $tgl_pinjam = strtotime($row['tgl_pinjam']);

                        // Menghitung selisih hari antara tanggal kembali dan tanggal pinjam
                        $selisih_hari = floor(($tgl_kembali - $tgl_pinjam) / (60 * 60 * 24));

                        if ($selisih_hari == 0 || $selisih_hari == 1 ) {
                        $status = "sudah kembali" ;
                        echo '<div style="background-color: green; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;"> ' . $status .' </div>';
                        }elseif ( $selisih_hari > 2) {
                        $status = "sudah kembali" ;
                        echo '<div style="background-color: green; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;"> ' . $status .' </div>';
                        } 
                        else {
                        $status = "belum kembali" ;
                        echo '<div style="background-color: red; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;">' . $status .' </div>';
                        }
                    ?>
                  </td> 
                  <td> 
                    <?php
                        if ($status == 'belum kembali') {
                            // Menampilkan tautan edit hanya jika tanggal kembali bukan pada tanggal yang sama atau 1 hari setelah tanggal peminjaman
                            echo '<a href="' . BASE_URL . '/buku/edit/' . $row['id'] . '" class="btn btn-primary">Edit</a>';
                        }
                    ?>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                  </td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>

</body>