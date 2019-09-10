<?php 
    class handphone{
        // method static bisa di akses tanpa mendeklarasikan objek terlebih dahulu
        protected static function info_handphone(){
            return "ini perangkat handphone ";
        }
    }
    
    class smartphone extends handphone{
        private static function info_smartphone(){
            return " jenis Smartphone";
        }

        public static function tampil_info(){
            echo parent::info_handphone();
            echo self::info_smartphone();
        }
    }
    // mengakses method static secara langsung menggunakan scope operator
    smartphone::tampil_info();
?>