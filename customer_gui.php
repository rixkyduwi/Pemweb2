<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
require_once 'class/static.php';// add 

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
            Customers
        </title>
        
        <link href="css/customer.css" rel="stylesheet" type="text/css" media="all" />
        <div align="center">
            <span class="textandlogo"><img src="img/customer.png"></span>
            <span class="textandlogo"><h1>Master Customer</h1></span>
           
        </div>

    </head>
    <body>
        <div class="container">
            <form action="" method="post">
            <div align="center">
                    <span class="forspan">Your ID</span>
                    <span ><input type = "text" name="myid"></span>
                </div>
                <div align="center">
                    <span class="forspan">Fullname</span>
                    <span ><input type = "text" name="myname"></span>
                </div>
                <div align="center">
                    <span class="forspan">Address</span>
                    <span><input type = "text" name="myaddr"></span>
                </div>
                <div align="center">
                    <span class="forspan">Phone</span>
                    <span><input type = "text" name="myphone"></span>
                </div>
                <div align="center">
                    <span class="forspan" aria-hidden="true">City</span>
                    <span><input type = "text" name="mycity"></span>
                </div>
                <div align="center">
                    <input type="submit" class="mybutton" name="savedata" value="Save Data">
                    <a class="mynew" href="customer_gui.php?action=new">New Trans</a>
                </div>
            </form>
            
        </div>
    </body>
</html>

<?php
include_once 'class/customer.php';
if (isset($_POST['savedata'])){
    $idcust = $_POST['myid'];
    $namacust = $_POST['myname'];
    $alamatcust = $_POST['myaddr'];
    $telpcust = $_POST['myphone'];
    $kotacust = $_POST['mycity'];
    $saveCustomer = new Customers($idcust,$namacust,$alamatcust,$telpcust,$kotacust);
    //$saveCustomer->inputToArray();
    $saveCustomer->saveToDB(); // add
}
//showData();
showDataFromDB(); //add
?>