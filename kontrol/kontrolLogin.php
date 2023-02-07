<?php

require('../request.php');

if (!empty($_GET['aksi'] == 'loginPetugas')) {
    // KUMPULKAN VARIABLE LOGIN
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $petugas = $koneksi->prepare("CALL getLoginPetugas('$username', '$password')");
    $petugas->execute();

    $data = $petugas->fetch();
    
    // JIKA DATA PETUGAS DITEMUKAN
    if ($data) {
        $_SESSION['USER']['id_petugas'] = $data['id_petugas'];
        $_SESSION['USER']['tipe'] = $data['tipe'];
        $_SESSION['USER']['level'] = $data['level'];
        $_SESSION['USER']['nama_petugas'] = $data['nama_petugas'];

        header('location:../petugas/index.php');
    } else {
        //CARA PERTAMA
        echo "Login Gagal";
    }
}

if (!empty($_GET['aksi'] == "logout")) {
    $tipe = $_SESSION['USER']['tipe'];
    session_destroy();
    if ($tipe == "petugas") {
        header('location:../login.php');
    } else {
        header('location:../login.php');
    }
}