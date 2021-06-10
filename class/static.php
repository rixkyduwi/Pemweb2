<?php
class Connection{

    public static $dbName = 'poltek';
    public static $userName = 'root';
    public static $password = 'root'; 

    public function myStatic(){
        print 'Database Name : '.self::$dbName."\n";
        print 'Username      : '.self::$userName."\n";
        print 'Password      : '.self::$password."\n";

    }
}
//direct calls to variable static in Class Object
print Connection::$dbName."\n";
print Connection::$userName."\n";
print Connection::$password."\n";

//Or you can call by initiate Class Object
$myconnection = new Connection();
$myconnection->myStatic()."\n\n";

//after initiate the Class Object, you can call directly to the static
print 'Call Directly Static Value Using myconnection Var'."\n";
print 'Database Name : '.$myconnection::$dbName."\n";
print 'Username      : '.$myconnection::$userName."\n";
print 'Password      : '.$myconnection::$password."\n";
try 
{
	$pdo = new PDO('mysql:host=localhost; dbname='.$dbName,$userName,$password);
}
catch (PDOException $e) 
{
    echo 'Error: ' .$e->getMessage();
    exit();
}

?>