<?php



$server = 'localhost';
$username = 'studioc9';
$password = 'CMo>6es4vp';
$database = 'studioc9_blog';

$db = mysqli_connect($server,$username,$password,$database);

$podre = mysqli_query($db,"SET NAMES 'utf8'");
if($db){
  Console.log("");
} else {
  echo "no jalo";
}

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
