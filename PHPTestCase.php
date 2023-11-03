<?php

// Metode untuk menghitung jumlah kata dalam sebuah kalimat
class PHPTestCase{

    // Membagi kalimat menjadi array kata-kata dengan spasi sebagai pemisah
    public function testCase($sentence){
        // Fungsi explode adalah untuk memecahkan value menjadi sebuah Array
        // Fungsi count adalah menghitung jumlah / panjangnya kata dalam Array

        return count(explode(" ", $sentence));
        // Funsi return digunakan untuk mengembalikan jumlah elemen / panjang array yang didapatkan dari variable $sentence
    }
}