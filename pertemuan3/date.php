<?php
    // date
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestamp/ EPOCH Time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();

    // echo date("l", time() + 60*60*24*100);

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, hari, bulan, tahun
    // echo date("l", mktime(0,0,0,2,5,2006));

    // strtotime
    echo date("l",strtotime("2 may 2006"));


?>