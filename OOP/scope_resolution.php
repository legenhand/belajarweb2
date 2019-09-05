<?php
    class handphone{
        public function info_hp($merk){
            return "Merk hp: $merk";
        }
    }

    // mengakses method pada class handphone secara langsung tanpa membuat objek
    echo handphone::info_hp("siomay");
    // akses method dengan membuat objek terlebih dahulu
    $hp_firman = new handphone();
    $hp_firman->info_hp("pisang");
?>