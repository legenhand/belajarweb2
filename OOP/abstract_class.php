<?php
    // abstract class tidak bisa diinisiasi objek
    abstract class handphone{
        // abstract method harus dibuat di child class
        abstract public function hidupkan();
        // method pada abstract class bisa di akses dengan mengakses secara langsung
        public function info_hp($merk){
            return "Merk Handphone : $merk";
        }
    }

    class smartphone extends handphone{
        public function hidupkan(){
            return "Smartphone dihidupkan";
        }
    }

    $hp_firman = new smartphone();
    echo $hp_firman->hidupkan();
    // mengakses method pada abstract class secara langsung
    echo handphone::info_hp("pisang");
?>