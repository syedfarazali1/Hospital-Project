<?php
include "../connection.php";
$ID = $_GET['ID'];

       
$link = new mysqli($servername, $username, $password, $dbname);

 $sql = "DELETE FROM reports WHERE `ID` = $ID";
    
mysqli_query($link, $sql);

header("Refresh:0; url=insertrp.php");  






?>  