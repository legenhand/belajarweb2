<?php
    class handphone {
        var $merk;
        var $tipe;
        var $jml_pulsa;

        function mengirim_pesan(){
            $this->jml_pulsa -= 150;
            echo "mengirim SMS, pulsa terpotong 150<br>";
        }
    }
    $hp_firman = new handphone();
    
    $hp_firman->jml_pulsa = 1500;
    echo "jumlah pulsa firman " . $hp_firman->jml_pulsa . "<br>";
    $hp_firman->mengirim_pesan();

    echo "jumlah pulsa setelah sms " . $hp_firman->jml_pulsa . "<br>";
?>