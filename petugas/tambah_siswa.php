<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Tambah</strong> Siswa</h1>

    <div class="card">
        <div class="card-body">
            <form action="../kontrol/kontrolSiswa.php?aksi=tambah" method="POST">
                <input type="text" name="nisn" class="form-control mb-2" placeholder="Masukkan NISN">
                <input type="text" name="nis" class="form-control mb-2" placeholder="Masukkan NIS">
                <input type="text" name="nama" class="form-control mb-2" placeholder="Masukkan Nama">
                <input type="text" name="alamat" class="form-control mb-2" placeholder="Masukkan Alamat">
                <input type="text" name="no_telp" class="form-control mb-2" placeholder="Masukkan No Telp">
                <input type="text" name="password" class="form-control mb-2" placeholder="Masukkan Password">
                <select name="id_kelas" class="form-control mb-2">
                    <?php
                    $kelas = $koneksi->prepare("CALL getKelas()");
                    $kelas->execute();
                    foreach($kelas->fetchAll() as $no=>$data) :
                    ?>
                    <option value="<?= $data['id_kelas'] ?>">
                        <?= $data['nama_kelas'] ?>
                    </option>
                    <?php
                    endforeach
                    ?>
                </select>
                <button class="btn btn-primary w-100" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>