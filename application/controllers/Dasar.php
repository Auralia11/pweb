<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasar extends CI_Controller {
    public function index() {

        echo "<h1>1. Variable</h1>";

        $nama = "aura";
        $umur = 21; 

        echo "Umur si " . $nama . " Sudah " . $umur . " tahun";

        echo "<h1>2. Array</h1>";

        $a = 10;
        $b = 5;

        echo "Aritmatika : $a + $b = " . ($a + $b) . "<br>";
        echo "Perbandingan : $a > $b = " . ($a > $b ? "Benar" : "Salah") . "<br>";

        echo "<h1>3. Percabangan</h1>";

        $nilai = 65;

        if ($nilai >= 90) {
            echo "Grade anda Adalah A";
        } elseif ($nilai >= 80) {
            echo "Grade anda Adalah B";
        } elseif ($nilai >= 70) {
            echo "Grade anda Adalah C";
        } elseif ($nilai >= 60) {
            echo "Grade anda Adalah D";
        }
        else {
                echo "Grade anda Adalah E";
        }

        echo "<h1>4. Perulangan</h1>";

        for ($i = 1; $i <= 3; $i++) {
            echo "Perulangan ke-$i <br>";
        }

        $j = 1;
        while ($j <= 3) {
            echo "Baris ke-$j <br>";
            $j++;
        }
        
        $array = [1, 2, 3, 4, 5];
        foreach ($array as $key => $value){
            echo "Baris ke-$value <br>";
        }
    }
    public function baru() {
        echo "DASAR BARU NI || OR AND NOT";
    }

}
