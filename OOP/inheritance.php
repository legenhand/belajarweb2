<?php
    // parent class handphone
    class handphone {
        public $merk;
        public $os;
        
        public function hidupkan(){
            return "Menghidupkan hp $this->merk <br>";
        }
    }

    // child class smartphone mewariskan class parent handphone
    class smartphone extends handphone{
        public function info_hp(){
            return "merk : $this->merk, OS: $this->os";
        }
    }

    // inisiasi objek
    $hp_firman = new smartphone();
    // property class parent bsia digunakan oleh objek child class
    $hp_firman->merk = "siomay";
    $hp_firman->os = "android";
    // method class parent bisa di gunakan oleh objek class child
    echo $hp_firman->hidupkan();

    // method child class
    echo $hp_firman->info_hp();

?>