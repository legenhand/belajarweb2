<?php

    class handphone {
        var $jml_pulsa;

        // fungsi __construct akan dijalankan ketika objek tersebut di inisiasi di awal
        // pemberian 1 argumen $pulsa yg berarti saat inisiasi object perlu diberi nilai argumen
        function __construct($pulsa){
            $this->jml_pulsa = $pulsa;
            echo "pulsa awal anda " . $pulsa . "<br>";
        }

        // fungsi __destruct akan dijalankan ketika sebuah object dihapus
        function __destruct(){
            echo "jumlah pulsa sekarang " . $this->jml_pulsa . "<br>";
        }

        function kirim_pesan($tarif, $jml_pesan = 1){
            $this->jml_pulsa -= $tarif * $jml_pesan;
        }
    }

    // pemberian nilai 2000 pada argumen pulsa yg berada di __construct
    $hp_firman = new handphone(2000);

    $hp_firman->kirim_pesan(250,2);

?>