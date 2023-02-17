<?php
$admin_username = "admin";
$admin_password = "asd";
$usuario_username = "usuario";
$usuario_password = "123";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; 
    $password = $_POST["password"];
    if ($username == $admin_username && $password == $admin_password) 
    {
        header("Location: Admin.html"); 
        exit();
    }
    if ($username == $usuario_username && $password == $usuario_password) 
    {
        header("Location: usuario.html"); 
        exit();
    } 
    else {
        header("Location: error.html"); 
        
    }
}
?>
