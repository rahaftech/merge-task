<?php
define("DB_SERVER", "localhost"); 
define("DB_USER"  , "root");
define("DB_PASS"  , "");
define("DB_NAME"  , "control");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stop=$_POST['stop'];
$forw=$_POST['forw'];
$righ=$_POST['righ'];
$lef=$_POST['lef'];
$back=$_POST['back'];

$sql = "INSERT INTO control_pa(stop,forw,righ,lef,back)
        VALUES ('$stop','$forw','$righ','$lef','$back')"; 

if ($conn->query($sql)==TRUE) { 
  
  echo "done";
 
}
else {
  echo"Error !!!";
} 
$conn->close();

?>
