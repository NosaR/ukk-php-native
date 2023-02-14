<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Edit</strong> Kelas</h1>

    <div class="card">
        <div class="card-body">
            <?php 
            $id = $_GET['id'];
            $kelas = $koneksi->prepare("CALL getKelasId('$id')");
            $kelas->execute();

            $data = $kelas->fetch();
            ?>
            <form action="../kontrol/kontrolKelas.php?aksi=edit_kelas" method="POST">
                <input type="hidden" name="id_kelas" value="<?= $data['id_kelas'] ?>">
                <input type="text" name="nama_kelas" class="form-control mb-2" placeholder="Masukkan Nama Kelas" value="<?= $data['nama_kelas'] ?>">
                <input type="text" name="kompetensi_keahlian" class="form-control mb-2" placeholder="Masukkan Kompetensi Keahlian" value="<?= $data['kompetensi_keahlian'] ?>">
                <button class="btn btn-primary w-100" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>