<?php 
$dbhost = "localhost";
$dbuser="root";
$dbpass="";
$dbname="On_rushss";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
          die("Could not connect to the database".mysqli_connect_error());
}
?>