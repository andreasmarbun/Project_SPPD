<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'penjualan')
                      // ^^^^ - pass the $con object from the line above

?>