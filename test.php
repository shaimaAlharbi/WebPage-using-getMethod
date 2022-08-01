<!DOCTYPE HTML>
<html>  
<body>

<form   action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
please enter the Number: <input type=int name="intnumber"><br>
<input type="submit" name="submit" value="submit">
</form>

</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webpage";

if(isset($_GET["submit"])){
$intnumber=$_GET["intnumber"];

}
// Create connection// Check connection
$conn =mysqli_connect("localhost", "root","","webpage")or die ("Error in  Connection");

 //sql to create table
$sql = "CREATE TABLE mytable (
intnumber INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "INSERT INTO mytable (intnumber)
VALUES ('$intnumber')";


if ($conn->query($sql) === TRUE) {
  echo "The table has been successfully created and the value added";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>

</html>


