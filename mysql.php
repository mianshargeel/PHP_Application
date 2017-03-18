<?php
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $url = "root:root@127.0.0.1/BRM_DB?reconnect=true"

// $server = $url["host"];
// $username = $url["root"];
// $password = $url["pass/"];
// $db = substr($url["path"], 1);

// $conn = new mysqli($server, $username, $password, $db);
$conn = new mysqli("localhost","root", "root", "BRM_DB");
?>