<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
require_once 'class/login.php';// add 
?>

<!doctype html>
<html>
    <head>
        <title>
            LOGIN
        </title>
        
        <link href="css/customer.css" rel="stylesheet" type="text/css" media="all" />
        <div align="center">
            <span class="textandlogo"><img src="img/customer.png"></span>
            <span class="textandlogo"><h1>Login</h1></span>
           
        </div>

    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <div align="center">
                    <span class="forspan">Username</span>
                    <span ><input type = "text" name="myusername"></span>
                </div>
                <div align="center">
                    <span class="forspan">Password</span>
                    <span><input type = "password" name="mypass"></span>
                </div>
                <div align="center">
                    <input type="submit" class="mybutton" name="login" value="Login">
                </div>
            </form>
            <div align="center" style="padding:10px;margin-top:10px;">
                No account ? <a href="reguser.php" style="text-decoration:none;" >Create One!</a>
            </div>
            
        </div>
    </body>
</html>

<?php

if (isset($_POST['login'])){
    $myusername = $_POST['myusername'];
    $myuserpwd = $_POST['mypass'];
    $saveUser = new Login($myusername,$myuserpwd);
    $saveUser->checkUserPwd();
}
?>