<?php
    $connect_db = mysqli_connect('localhost', 'root', '','food_order_qrcode');
    if(mysqli_connect_errno())
    {
        echo"Connect Eroor".mysqli_connect_errno();
    }
    mysqli_set_charset($connect_db,'utf8');
?>