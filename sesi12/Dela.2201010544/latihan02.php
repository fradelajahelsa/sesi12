<?php
    $dta[0]["NIM"] ="1122334455";
    $dta[0]["NAMA"] ="Dela Jahelsa";
    $dta[0]["JURUSAN"] ="TI-PARIWISATA";
    $dta[0]["KELAS"] ="J";
    $dta[0]["ALAMAT"] ="Panjer";
    $dta[0]["JKEL"] ="P";

    $dta[1]["NIM"] ="22345612";
    $dta[1]["NAMA"] ="Intan";
    $dta[1]["JURUSAN"] ="TI-PARIWISATA";
    $dta[1]["KELAS"] ="J";
    $dta[1]["ALAMAT"] ="Kuta";
    $dta[1]["JKEL"] ="P";

    $dta[2]["NIM"] ="22010105440432";
    $dta[2]["NAMA"] ="Ani";
    $dta[2]["JURUSAN"] ="TI-PARIWISATA";
    $dta[2]["KELAS"] ="J";
    $dta[2]["ALAMAT"] ="Gianyar";
    $dta[2]["JKEL"] ="P";

    $dta[3]["NIM"] ="2201010393";
    $dta[3]["NAMA"] ="valentina";
    $dta[3]["JURUSAN"] ="TI-PARIWISATA";
    $dta[3]["KELAS"] ="J";
    $dta[3]["ALAMAT"] ="Sesetan";
    $dta[3]["JKEL"] ="P";

    $dta[4]["NIM"] ="2201010506";
    $dta[4]["NAMA"] ="Celi";
    $dta[4]["JURUSAN"] ="TI-PARIWISATA";
    $dta[4]["KELAS"] ="J";
    $dta[4]["ALAMAT"] ="Karangasem";
    $dta[4]["JKEL"] ="P";

    header("content-type: application/json; charset=utf-8");

    echo json_encode($dta);