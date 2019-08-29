<?php
    // Pembuatan class dengan nama handphone, property dan method di taruh di dalam {}
    class handphone {
        //  Pembuatan beberapa property merk,tipe dan jml_pulsa
        var $merk;
        var $tipe;
        var $jml_pulsa;

        // Pembuatan method mengirim pesan yang berisi perintah mengurangi nilai property jml_pulsa sebesar 150

        function mengirim_pesan(){
            $this->jml_pulsa -= 150;
        }
    }

    // Membuat Objek handphone_firman dengan class handphone
    $handphone_firman = new handphone();
?>