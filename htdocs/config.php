<?php 
$db = mysqli_connect("localhost", "root", "", "register-db");
$result = mysqli_query($db, "SELECT * FROM `users`");
$q = mysqli_query($db, "SELECT COUNT(1) FROM `users`");
$people = mysqli_fetch_array($q);
$siteurl = "http://htdocs";

?>
