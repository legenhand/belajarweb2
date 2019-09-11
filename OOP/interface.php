<?php 
    interface sim_card{
        // fungsi hanya ditulis nama saja
        public function aktivasi();
        function isi_pulsa();
    }

    interface memory_card{
        function format();
    }

    class handphone implements sim_card{
        // interface method pada simcard harus di implementasi ulang
        public function aktivasi(){
            return "kartu telah aktif";
        }
    
        public function isi_pulsa(){
            return "pulsa telah diisi";
        }
    }

    // dua buah interface diimplementasikan dipisahkan oleh koma
    class smartphone implements sim_card, memory_card{
        public function aktivasi(){
            return "Kartu telah aktif";
        }

        public function isi_pulsa(){
            return "pulsa telah diisi";
        }

        public function format(){
            return "Memory card telah diformat";
        }
    }


?>