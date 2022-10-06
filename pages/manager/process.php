<?php
include "../../conf/conn.php";

if(isset($_POST['approve']))
{
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value){
                        echo $value;
                        $sql = "UPDATE pegawai set nomor ='1' where nama = '$value'"; 

                        mysql_query($sql) or die (mysql_error());

                        $sql = "SELECT pegawai from manager where nama = '$value'"; 

                        $result = mysql_query($sql) or die (mysql_error());
                        
                        echo '<script>window.location.href="pages/manager/manajer.php?page=data_manajer"</script>';


                    }
        }
}
?>     