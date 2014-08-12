<?php
class Formatter{
    
    public $angka;
    public static function format_rupiah($angka){
        
        $rupiah=number_format($angka,0,',',',');
        return $rupiah;
    }
}