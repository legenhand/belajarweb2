<?php
    class handphone{
        const OS = "Android";
    }

    // mengakses dengan nama class
    echo handphone::OS;
    // mengakses dengan objek
    $hp_firman = new handphone();
    echo "<br>". $hp_firman::OS;
    // mengakses dengan variable
    $hp = "handphone";
    echo "<br>" . $hp::OS;


?>