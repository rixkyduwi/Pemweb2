<?php 
$number=12;
function isprime($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
     
    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}
//fungsi bantu untuk mengubah true menjadi 'IYA' 
//dan mengubah false menjadi 'BUKAN' 
 
function cekstatus($status){
if($status==true) {
return 'IYA';
} else { 
return 'BUKAN';
}
}
$i = $_GET['bil'];
for ($i = $_GET['bil']; $i<=120; $i++)
  { 
  echo  $i. " Bilangan prima?  " . cekstatus(isPrime($i)) . "
";
  }

?>
    