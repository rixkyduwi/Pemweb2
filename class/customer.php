<?php
class Customers{
    private $namecust;
    private $addrcust;
    private $phonecust;
    private $citycust;
    private $idcust;

    function __construct($idcust,$namacust,$alamatcust,$telpcust,$kotacust){
        $this->idcust = $idcust;
        $this->namecust = $namacust;
        $this->addrcust = $alamatcust;
        $this->phonecust = $telpcust;
        $this->citycust = $kotacust;
        //semua yg ada di dalam kurung kurawal custmer adalah this
    }
   
    function inputToArray(){ 
        $myname = $this->namecust;
        $myid = $this->idcust;
        $itemArray = array($myid=>array('id'=>$this->idcust,'name'=>$this->namecust,'address'=>$this->addrcust, 'phone'=>$this->phonecust,'city'=>$this->citycust));

        if(!empty($_SESSION["daftar_cust"])){
            $itemcheck=$_SESSION['daftar_cust'];
            if(in_array($myid, array_column($itemcheck, 'id'))) {
                
            }else{
                $_SESSION['daftar_cust']=array_merge($_SESSION['daftar_cust'],$itemArray);
            }
        }else{
            $_SESSION["daftar_cust"] = $itemArray;
        }
    }

    function saveToDB(){
        require_once '/var/www/kelas4a/class/static.php';
        $_idcust = $this->idcust;
        $_name = $this->namecust;
        $_address = $this->addrcust;
        $_phone = $this->phonecust;
        $_city = $this->citycust;

        try {
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = "INSERT INTO customers (cust_id, cust_name,cust_addr,cust_phone,cust_city)
                VALUES('$_idcust','$_name','$_address','$_phone','$_city')";
                
                $pdo->exec($stmt);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}

function showDataFromDB(){
    require_once '/var/www/kelas4a/class/static.php';
    try {
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    echo '
            <link href="css/customer.css" rel="stylesheet" type="text/css" media="all" />
            <table>
                <thead>
                    <th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>City</th><th>Action</th>
                </thead>
                <tbody>';
    while ($row3 = $stmt->fetchObject()) {                
                    echo '<tr>
                        <td>'.$row3->cust_id.'</td>
                        <td>'.$row3->cust_name.'</td>
                        <td>'.$row3->cust_addr.'</td>
                        <td>'.$row3->cust_phone.'</td>
                        <td>'.$row3->cust_city.'</td>
                        <td><a href="./customer_gui.php?action=edit&&id='.$row3->cust_id.'" class="myaction">Edit Data</a>
                        <a href="./customer_gui.php?action=delete&&id='.$row3->cust_id.'" class="myaction" style="background-color:#e76f51;">Delete Data</a></tr>';
    
    }
    echo '</tbody>
            </table>';
}

function showData(){
    if(isset($_SESSION['daftar_cust'])){

        echo '
            <link href="css/customer.css" rel="stylesheet" type="text/css" media="all" />
            <table>
                <thead>
                    <th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>City</th><th>Action</th>
                </thead>
                <tbody>';
        
                foreach ($_SESSION["daftar_cust"] as $item)
                {
                    echo '<tr>
                        <td>'.$item['id'].'</td>
                        <td>'.$item['name'].'</td>
                        <td>'.$item['address'].'</td>
                        <td>'.$item['phone'].'</td>
                        <td>'.$item['city'].'</td>
                        <td><a href="./customer_gui.php?action=edit&&id='.$item["id"].'" class="myaction">Edit Data</a>
                        <a href="./customer_gui.php?action=delete&&id='.$item["id"].'" class="myaction" style="background-color:#e76f51;">Delete Data</a></tr>';

                }
        
        echo '</tbody>
            </table>';
    }
}
