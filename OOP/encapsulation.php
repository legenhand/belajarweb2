<?php
    class handphone{
        // hak akses public bisa diakses didalam/diluar/di kelas turunan
        public $merk;
        // hak akses protected hanya bisa di akses didalam/di class turunan
        protected $os;
        // hak akses private hanya bis di akses di dalam kelas itu sendiri
        private $tahun_produksi;
    }

    class smartphone extends handphone{
        public function info_hp(){
            // mengakses hak akses protected di child class
            $this->os = "Android";
            return "Merk : $this->merk, OS: $this->os";
        }

        public function tahun_produksi(){
            // error karena mengakses private di kelas turunan
            return "Tahun Produksi $this->tahun_produksi";
        }
    }

    $hp_firman = new smartphone();

    $hp_firman->merk = "Samsung";

    echo $hp_firman->info_hp();
    echo "<br>";
    echo $hp_firman->tahun_produksi();
?>