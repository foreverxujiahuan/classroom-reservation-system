<?php
 require("delete108.php");
 $id=$_GET["id"];
 $sql="DELETE FROM people1 WHERE id=$id";
 if (mysql_query($sql)) {
   header("108people.php");
 }
?>