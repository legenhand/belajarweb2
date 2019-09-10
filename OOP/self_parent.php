<?php 
    class handphone{
        public function tampil_pesan_handphone(){
            // self berarti menunjukan method yg berada pada 
            echo self::tampil_pesan();
            //  method ini merujuk ke class child jika objek child yg di inisiasi
            echo $this->tampil_pesan();
        }

        public function tampil_pesan(){
            return "ini perangkat Handphone";
        }
    }

    class smartphone extends handphone{
        public function tampil_pesan_smartphone(){
            // parent merujuk pada method yg ad di class parent
            echo parent::tampil_pesan();
            // merujuk pada method class ini
            echo $this->tampil_pesan();
        }

        public function tampil_pesan(){
            return " jenis Smartphone";
        }
    }

    $hp_firman = new smartphone();

    $hp_firman->tampil_pesan_handphone();
    echo "<br>";
    $hp_firman->tampil_pesan_smartphone();
?>