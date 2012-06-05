<?php
include('db_core.php');
 $sql2 = "SELECT * FROM security_table";
 $query2 = mysql_query($sql2);
 $data2 = mysql_fetch_array($query2);

 if($data2['lockdown'] == '1'){
 die('<html><head><title>HaxMe || Maintenance Mode</title></head><body><br /><br /><br /><center><img src="someimage.png" /></center></body></html>');
 }
?>