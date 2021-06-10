/*
Case Study:
Code di bawah merupakan implementasi dari suatu process
transaksi sederhana untuk mengambil dan menyetor uang pada mesin ATM

function __construct akan dijalankan pertama kali pada saat user memasukan
kartu ATM pada mesin ATM, sehingga inisiasi object pada main program 
akan seperti  ini : 
       $newUser = new ATMMachine('1234 5678 9055 5734','Bistique','25/04/2024');

Setelah inisiasi object maka akan dilakukan checkValidity kartu, apabila valid maka 
Proses dapat dilanjutkan ke method processTransaction.

Method ejectCard dilakukan apabila checkValidity menghasilkan nilai False atau pada 
saat transaksi telah selesai.

*/

<?php
class ATMMachine{
    private $cardNum;
    private $holderName;
    private $PIN;
    private $expireDate;
    private $amount;
    private $processType;

    function __construct($_cardNum,$_holderName,$_PIN,$_expireDate){
        $this->cardNum = $_cardNum;
        $this->holdeName = $_holderName;
        $this->PIN = $_PIN;
        $this->expireDate = $_expireDate;
        $isValidCard = checkValidity();
    }

    function checkValidity(){
        if(!empty($this->cardNum)){
            $myPIN = '12345'; //example
            $__expireDate = '29/04/2024'; //example
            if (($this->PIN == $myPIN) && ($this->expireDate < $__expireDate)){
                return True;
            }else{
                return False;
            }

        }else{
            echo 'Your Card Is Not Valid';
            ejectCard();
            exit();
        }
    }

    function ejectCard(){
        $ejectCard = True;        
    }

    
    function processTransaction($processType, $__amount){
        $this->processType = $processType;
        switch ($this->processType){
            case 'withdraw':
                $isValidCard = checkValidity();
                if ($isValidCard){
                    $this->amount = $__amount;
                    echo 'Jumlah Nominal Yang Anda Tarik Adalah : '.$this->amount;
                    ejectCard();
                }else{
                    ejectCard();
                }
            
            case 'deposit' :
                $isValidCard = checkValidity();
                if ($isValidCard){
                    $this->amount = $__amount;
                    echo 'Jumlah Nominal Yang Disetor Adalah : '.$this->amount;
                    ejectCard();
                }else{
                    ejectCard();
                }
        }
    }
    function changePin($_oldPIN,$_newPIN){
        echo 'Your Old PIN is :'.$this->PIN;
        $this ->PIN=$_newPIN;
        
        $updateSuccess =updatePIN();    
        echo 'Your PIN has been updated';
    }

    
}
$mike = new ATMMachine('1223312414','micheal','123','24/04/2021');
    $mike ->processTransaction('deposit',200000);
    $mike-> changePin('12345','32525');
    
?>