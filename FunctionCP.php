<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP01 - Kelas 4A</title>
    <div align="center">
        <h1>
            PHP FUNCTION
        </h1>
    </div>

    <style>
        h1 {
            color: #0077b6;
        }

        .spanlabel {
            color: white;
            background-color: #3d405b;
            font-size: medium;
            padding: 10px 12px;
        }

        input[type=text] {
            margin: 8px 0;
            padding: 8px 10px;
            font-size: medium;
        }

        input[type=submit] {
            width: 100px;
            height: 40px;
            border-radius: 5px;
            text-decoration: none;
            border-style: none;
            background-color: blue;
        }
    </style>
</head>

<body>
    <div class="constructor">
        <form>
    <span class="forspan">Fullname</span>
        <span><input type="text" name="myname"></span>
        <input type="sybmit"><input
        </form>

    </div>

    
</body>

</html>
<?php
include "FunctionCP.php";

if(isset($_POST['Mysubmit'])){ 
    $nama=$_POST['namasaya'] ; 
} else{

}
    function cetaknama_operan(){ 
        $nama = "default";
        echo 'nama saya adalah'.$nama; 
    } function cetaknama_withparam($nama){ 
        echo ' Nama Saya Dalam Function with param' .$nama; 
    } 
    ?>
