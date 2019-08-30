<?php
    // Pembuatan class dengan nama handphone, property dan method di taruh di dalam {}
    class handphone {
        //  Pembuatan property jml_pulsa
        var $jml_pulsa;

        // Pembuatan method mengirim pesan yang berisi perintah mengurangi nilai property jml_pulsa sebesar 150

        function mengirim_pesan($tarif, $jml_pesan = 1){
            $this->jml_pulsa -= $tarif*$jml_pulsa;
        }
    }

    // Membuat Objek handphone_firman dengan class handphone
    $hp_firman = new handphone();
?>