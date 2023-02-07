<?php

class Database
{

    public function connect()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbname = "ukk_spp";
        $dbpass = "";


        try {
            $connect = new PDO("mysql:host=$dbhost;dbname=$dbname,$dbuser,$dbpass");
            $connect->exec('set names=utf8');
        } catch (\Throwable $th) {
            return "Koneksi Gagal, Periksa Database Kamu";
        }

    }
}