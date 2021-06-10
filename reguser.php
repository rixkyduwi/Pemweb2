<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
require_once 'class/login.php';// add 

if (empty($_GET['action'])){
    echo 'Please define your action';
    exit();
}

if($_GET['action']){
    
    switch ($_GET['action']) {
        case 'new':
            
            break;
        
        case 'edit':
            $id = $_GET['id'];
           
            echo 'You Press Edit Mode on Customer'.$id.'<br>
                    And We Will Define Code Later';
            break;
        
        case 'delete':
            $id = $_GET['id'];
                
                echo 'You Press Delete Mode on Customer '.$id.'<br>
                    And We will Define Code Later';
                break;
        
        default:
            # code...
            break;
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>
            REGISTRATION
        </title>
        
        <link href="css/customer.css" rel="stylesheet" type="text/css" media="all" />
        <div align="center">
            <span class="textandlogo"><img src="img/customer.png"></span>
            <span class="textandlogo"><h1>USER REGISTRATION</h1></span>
           
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
                    <input type="submit" class="mybutton" name="savedata" value="Save Data">
                </div>
            </form>
            
        </div>
    </body>
</html>

<?php

if (isset($_POST['savedata'])){
    $myusername = $_POST['myusername'];
    $myuserpwd = $_POST['mypass'];
    $saveUser = new Login($myusername,$myuserpwd);
    //$saveCustomer->inputToArray();
    $saveUser->saveToDB(); // add
}
//showData();
showDataFromDB(); //add
?>