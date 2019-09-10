<?php
    class handphone{
        // tidak boleh ada nama method yg sama dengan method final
        final public function hidupkan(){
            return "handphone dihidupkan";
        }
    }

    // final class tidak bisa diturunkan 
    final class smartphone extends handphone{
        public function hidupkan(){
            return "Smartphone dihidupkan";
        }
    }

    // error karena menurunkan class final
    class hp_second extends smartphone{
        // error karena menggunakan nama method final
        public function hidupkan(){
            return "Handphone tidak dapat hidup";
        }
    }


?>