<?php
require __DIR__ . '/../config.php';
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");  

//email config
$SMTPDebug  = $SMTPDebug;
$SMTPAuth   = $SMTPAuth;
$SMTPSecure = $SMTPSecure;
$Port       = $Port;
$Host       = $Host;
$Up   = $yes;
$Down   = $No;
