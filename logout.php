<?php  
//Here We'll Destroy ALL active sessions

session_start();
unset($_SESSION['login_usr']);
unset($_SESSION['name_usr']);
unset($_SESSION['type_usr']);
session_unset();//Just In Case...
session_destroy();

header("location: index.php");
exit();

