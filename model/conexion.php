<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = 'localhost' ;
$db_user = 'root';
$db_password = '';
$db_db = 'demoblog' ;
$mysqli = @new mysqli(
$db_host ,
$db_user ,
$db_password ,
$db_db
);
if ($mysqli->connect_error ) {
echo 'Errno: ' .$mysqli->connect_errno ;
echo '<br>';
echo 'Error: ' .$mysqli->connect_error ;
exit();
}
echo 'Success: A proper connection to MySQL was made.' ;
echo $db_db;
echo '<br>';
echo 'Host information: ' .$mysqli->host_info ;
echo '<br>';
echo 'Protocol version: ' .$mysqli->protocol_version ;
//$mysqli->close();
?>



