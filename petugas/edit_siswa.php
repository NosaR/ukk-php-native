<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Tambah</strong> Siswa</h1>

    <div class="card">
        <div class="card-body">
            <?php
            $nisn = $_GET['nisn'];
            $siswa = $koneksi->prepare("CALL getSiswaNisn('$nisn')");
            $siswa->execute();
            
            $data = $siswa->fetch();
            $siswa->nextRowset();
            ?>
            <form action="../kontrol/kontrolSiswa.php?aksi=update" method="POST">
                <input type="hidden" name="nisn" class="form-control mb-2" placeholder="Masukkan NISN"
                    value="<?= $data['nisn'] ?>">
                <input type="text" name="nis" class="form-control mb-2" placeholder="Masukkan NIS"
                    value="<?= $data['nis'] ?>">
                <input type="text" name="nama" class="form-control mb-2" placeholder="Masukkan Nama"
                    value="<?= $data['nama'] ?>">
                <input type="text" name="alamat" class="form-control mb-2" placeholder="Masukkan Alamat"
                    value="<?= $data['alamat'] ?>">
                <input type="text" name="no_telp" class="form-control mb-2" placeholder="Masukkan No Telp"
                    value="<?= $data['no_telp'] ?>">
                <input type="text" name="password" class="form-control mb-2" placeholder="Masukkan Password">
                <select name="id_kelas" class="form-control mb-2">
                    <?php
                    $kelas = $koneksi->prepare("CALL getKelas()");
                    $kelas->execute();
                    foreach($kelas->fetchAll() as $no=>$dataKelas) :
                    ?>
                    <option value="<?= $dataKelas['id_kelas'] ?>"
                        <?= $dataKelas['id_kelas'] != $data['id_kelas'] ?: 'selected' ?>>
                        <?= $dataKelas['nama_kelas'] ?>
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