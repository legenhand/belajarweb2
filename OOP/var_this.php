<?php
    // Pembuatan class dengan nama handphone, property dan method di taruh di dalam {}
    class handphone {
        //  Pembuatan beberapa property merk,tipe dan jml_pulsa
        var $merk;
        var $tipe;
        var $jml_pulsa;
        // Pembuatan method mengirim pesan yang berisi perintah mengurangi nilai property jml_pulsa sebesar 150   
        function mengirim_pesan(){
            // Variable $this berfungsi untuk menunjuk object itu sendiri
            $this->jml_pulsa -= 150;
            echo "mengirim SMS, pulsa terpotong 150<br>";
        }
    }
    // Membuat Objek hp_firman dengan class handphone

    $hp_firman = new handphone();
    // men set property jml pulsa menjadi 1500
    $hp_firman->jml_pulsa = 1500;
    // menampilkan isi property jml_pulsa objek hp_firman
    echo "jumlah pulsa firman " . $hp_firman->jml_pulsa . "<br>";
    // melakukan method mengirim pesan pada object hp firman, jml pulsa berkurang 150
    $hp_firman->mengirim_pesan();
    // cetak jml pulsa setelah mengirim pesan
    echo "jumlah pulsa setelah sms " . $hp_firman->jml_pulsa . "<br>";
?>