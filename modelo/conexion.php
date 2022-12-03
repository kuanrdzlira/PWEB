<?php
class Conexion{
  static function conectar() {
$servername = "localhost";
$username = "root";
$password = "";
$database="detma2";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
echo "error";
} else {
return $conn;
}
}





}

?>