<?php

require_once "Buku.php";

class DaftarBukuModel{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemograman Web', 'RObert T.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi M.', 'Andi Publisher', '2017'),
            new Buku('Kalkulus', 'Emely S.', 'Airlangga', '2024'),
            new Buku('Metodologi Penelitian', 'James W', 'UIN Publisher', '2018'),
        );

        return $daftar_buku;
    }

public function getKolomTabel(){
    $kolom_tabel = array(
        'No', 'Judul', 'Pengarang', 'penerbit', 'Tahun'
    );

    return $kolom_tabel;
}    
}
