<?php
require '../request.php';

if (empty($_SESSION['USER']['level'] == "petugas")) {
    die("Permision denied - 403");
}

if ($_GET['aksi'] == "tambah") {
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    $tambah = $koneksi->prepare("CALL tambahKelas('$nama_kelas', '$kompetensi_keahlian')");
    $tambah->execute();
    header('location:../petugas?page=kelas');
}

if ($_GET['aksi'] == "hapus") {
    $id_kelas = $_POST['id_kelas'];

    $hapus = $koneksi->prepare("CALL hapusKelas('$id_kelas')");
    $hapus->execute();
    header('location:../petugas?page=kelas');
}

if ($_GET['aksi'] == "edit_kelas") {
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    $hapus = $koneksi->prepare("CALL updateKelas('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')");
    $hapus->execute();
    header('location:../petugas?page=kelas');
}
