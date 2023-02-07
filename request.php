<?php
include('Database.php');

$db = new Database();
$koneksi = $db->connect();

// JIKA TIDAK ADA SESSION YANG DIMULAI
if (empty($_SESSION)) {
    session_start();
}