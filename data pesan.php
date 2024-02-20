<?php
if(isset($_POST['button])){
    $user_name = $_POST['user_name'];
    $jk = $_POST['jk'];
    $KesanPesan = $_POST['KesanPesan'];

    echo "Atas nama $user_name dengan jenis kelamin $jk mengirimkan pesan $PesanKesan";
}