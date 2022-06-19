<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    echo "Name : ".$_POST["pname"]."<br>";
    echo "Age : ".$_POST["age"]."<br>";
    echo "Address : ".$_POST["address"]."<br>";
    echo "Email : ".$_POST["email"]."<br>";
    echo "Password : ".$_POST["password"]."<br>";
    echo "Sex : ".$_POST["sex"]."<br>";

    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "ougridb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Failed".$conn->connect_error);
    }

  //  $sql = 'INSERT INTO participants values(".$_POST["pname"].','.$_POST["age"].','.$_POST["address"].','.$_POST["email"].'","'.$_POST["password"].'","'
  //  .$_POST["sex"].'",1)';

    $sql = "INSERT INTO participants(name, age, address, email, password, sex) values('".$_POST["pname"]."',".$_POST["age"].",'".$_POST["address"]."','".$_POST["email"]."','".$_POST["password"].
    "','".$_POST["sex"]."')";

    echo $sql;

   // $result = $conn->query($sql);
    ?>
</body>
</html>