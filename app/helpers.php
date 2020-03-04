<?php

if(!function_exists('readInt')){
    function readInt($angka) {
        $x = $angka;
        $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

        if ($x < 12)
            return " " . $angka[$x];
        elseif ($x < 20)
            return readInt($x - 10) . " belas";
        elseif ($x < 100)
            return readInt($x / 10) . " puluh" . readInt($x % 10);
        elseif ($x < 200)
            return " seratus" . readInt($x - 100);
        elseif ($x < 1000)
            return readInt($x / 100) . " ratus" . readInt($x % 100);
        elseif ($x < 2000)
            return " seribu" . readInt($x - 1000);
        elseif ($x < 1000000)
            return readInt($x / 1000) . " ribu" . readInt($x % 1000);
        elseif ($x < 1000000000)
            return readInt($x / 1000000) . " juta" . readInt($x % 1000000);
    }
}