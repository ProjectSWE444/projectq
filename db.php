<?php



$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db";

$name    = "";
$email    = "";
$message    = "";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

$sql = "SELECT *FROM users";
$result = $conn->query($sql);


$sql2 = "SELECT *FROM about";
$result2 = $conn->query($sql2);

$sql3 = "SELECT *FROM skill";
$result3 = $conn->query($sql3);



if (isset($_POST['contact'])) {

  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  	$query = "INSERT INTO contact (name, email, message ) 
  			  VALUES('$name','$email','$message' )";
  	mysqli_query($conn, $query);

    header('location: index.php');
  
}

?>
