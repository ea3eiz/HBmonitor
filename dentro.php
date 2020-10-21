<?php  	
session_start();
$passIng = strip_tags(sha1($_GET['pass']));
$mipass="356a192b7913b04c54574d18c28d46e6395428ab"; // MIO
//$mipass="ae8e0934f4e800f19d67db331ad6432322b3b00a"; // EG
if ($passIng==$mipass){
$_SESSION['permisos'] = 1;
header("Location: index_template.html");	
}
else{
header("Location: index.php");
}
?>