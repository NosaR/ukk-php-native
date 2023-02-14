<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Manajemen</strong> Kelas</h1>
    <a href="?page=tambah_kelas" class="btn btn-primary mb-4">+ Tambah Kelas</a>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Aksi</th>
        </tr>

        <?php
        $kelas = $koneksi->prepare("CALL getKelas()");
        $kelas->execute();
        foreach($kelas->fetchAll() as $no=>$data) :
        ?>
        <tr>
            <td><?= $no+1 ?></td>
            <td><?= $data["nama_kelas"] ?></td>
            <td><?= $data["kompetensi_keahlian"] ?></td>
            <td>
                <a href="?page=edit_kelas&id=<?= $data["id_kelas"] ?>" class="btn btn-sm btn-warning mb-1">Edit</a>
                <form action="../kontrol/kontrolKelas.php?aksi=hapus" method="POST">
                    <input type="hidden" name="id_kelas" value="<?= $data["id_kelas"] ?>">
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach
        ?>
    </table>
</div>