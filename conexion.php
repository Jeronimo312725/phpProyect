<!-- Arreglo la conexion dañada -->
<?php
$servername = "db4free.net";
$database = "sgmudev";
$username = "udev_edu";
$password = "OscarDorado";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
