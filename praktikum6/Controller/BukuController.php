<?php
require_once "Model/DaftarBukuModel.php";

class BukuController{

    public function jalankan(){

        //Menggunakan Model
        $dataModel = new DaftarBukuModel();

        //Mengirim DataModel ke BukuView dan Menampilkannya
        include "View/BukuView.php";


    }
}