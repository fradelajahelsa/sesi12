<?php
    $dta["NIM"] ="1122334455";
    $dta["NAMA"] ="Dela Jahelsa";
    $dta["JURUSAN"] ="TI-PARIWISATA";
    $dta["KELAS"] ="J";
    $dta["ALAMAT"] ="Panjer";
    $dta["JKEL"] ="P";

    header("content-type: application/json; charset=utf-8");

    echo json_encode($dta);