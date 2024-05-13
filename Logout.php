<?php
session_start();
unset($_COOKIE["username"]);
header(Location:"https://hc899.brighton.domains/Groupproject/Index.php");
exit();
?>