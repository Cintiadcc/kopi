<?php
    $koneksi = mysqli_connect('localhost','root','','idcard');

    if(!$koneksi)
    {
        die("Koneksi dengan data base gagal: ".mysqli_connect_errno().
            mysqli_connect_error());
    }
 ?>   