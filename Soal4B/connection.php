<?php 
    date_default_timezone_set('Asia/Jakarta');

    $con = mysqli_connect('localhost', 'root', '', 'db_programmer');
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }
?>