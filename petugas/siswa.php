<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Manajemen</strong> Siswa</h1>
    <a href="?page=tambah_siswa" class="btn btn-primary mb-4">+ Tambah Siswa</a>

    <table class="table">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Aksi</th>
        </tr>

        <?php
        $siswa = $koneksi->prepare("CALL getSiswa()");
        $siswa->execute();
        foreach($siswa->fetchAll() as $no=>$data) :
        ?>
        <tr>
            <td><?= $no+1 ?></td>
            <td><?= $data["nisn"] ?></td>
            <td><?= $data["nis"] ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["nama_kelas"] ?></td>
            <td><?= $data["alamat"] ?></td>
            <td><?= $data["no_telp"] ?></td>
            <td>
                <a href="?page=edit_siswa&nisn=<?= $data["nisn"] ?>" class="btn btn-sm btn-warning mb-1">Edit</a>
                <form action="../kontrol/kontrolSiswa.php?aksi=hapus" method="POST">
                    <input type="hidden" name="nisn" value="<?= $data["nisn"] ?>">
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach
        ?>
    </table>
</div>