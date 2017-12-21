<?php
 require("delete216.php");
 $id=$_GET["id"];
 $sql="DELETE FROM people2 WHERE id=$id";
 if (mysql_query($sql)) {
   header("216people.php");
 }
?>