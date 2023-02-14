<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Tambah</strong> Kelas</h1>

    <div class="card">
        <div class="card-body">
            <form action="../kontrol/kontrolKelas.php?aksi=tambah" method="POST">
                <input type="text" name="nama_kelas" class="form-control mb-2" placeholder="Masukkan Nama Kelas">
                <input type="text" name="kompetensi_keahlian" class="form-control mb-2" placeholder="Masukkan Kompetensi Keahlian">
                <button class="btn btn-primary w-100" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>