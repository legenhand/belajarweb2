<?php
    // Pembuatan class dengan nama handphone, property dan method di taruh di dalam {}
    class handphone {
        //  Pembuatan property jml_pulsa
        var $jml_pulsa;

        // Pembuatan method mengirim pesan yang berisi perintah mengurangi nilai 
        // property jml_pulsa sebesar argumen $tarif dikali argumen $jml_pesan
        // argumen $tarif tidak memiliki nilai default
        // argumen jml_pesan memiliki nilai default 1,jika argumen ini tidak diisi maka argumen default akan digunakan


        function mengirim_pesan($tarif, $jml_pesan = 1){
            echo "pulsa akan terpotong sebesar " . $tarif*$jml_pesan . " untuk mengirim pesan <br>";
            $this->jml_pulsa -= $tarif*$jml_pesan;
            echo "Pulsa anda sekarang " . $this->jml_pulsa . "<br>";
        }
    }

    // Membuat Objek handphone_firman dengan class handphone
    $hp_firman = new handphone();

    // mengatur jml pulsa objek hp firman sebesar 2000
    $hp_firman->jml_pulsa = 2000;

    // Mencetak nilai jml_pulsa objek $hp_firman

    echo "jumlah pulsa hp firman " . $hp_firman->jml_pulsa . "<br>";

    // melakukan method mengirim pesan dengan satu argumen (tarif)
    $hp_firman->mengirim_pesan(150);

    // melakukan method mengirim pesan dengan dua argumen (tarif dan jumlah pesan)
    $hp_firman->mengirim_pesan(200,2);

?>