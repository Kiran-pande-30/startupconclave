<?php
session_start();
if(isset($_POST['submit']))
{
 $servername = "localhost";
  // $username = "root";
  // $password = "";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "suc_login";
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$team_name=mysqli_real_escape_string($conn, $_POST['team_name']);
$leader_name=mysqli_real_escape_string($conn, $_POST['leader_name']);
$contact=mysqli_real_escape_string($conn, $_POST['contact']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
$sector = mysqli_real_escape_string($conn, $_POST['sector']);
$other = mysqli_real_escape_string($conn, $_POST['other']);
$size = mysqli_real_escape_string($conn, $_POST['size']);
$name1 = mysqli_real_escape_string($conn, $_POST['name1']);
$email1 = mysqli_real_escape_string($conn, $_POST['email1']);
$contact1 = mysqli_real_escape_string($conn, $_POST['contact1']);
$name2 = mysqli_real_escape_string($conn, $_POST['name2']);
$email2 = mysqli_real_escape_string($conn, $_POST['email2']);
$contact2 = mysqli_real_escape_string($conn, $_POST['contact2']);
$name3 = mysqli_real_escape_string($conn, $_POST['name3']);
$email3 = mysqli_real_escape_string($conn, $_POST['email3']);
$contact3 = mysqli_real_escape_string($conn, $_POST['contact3']);
$name4 = mysqli_real_escape_string($conn, $_POST['name4']);
$email4 = mysqli_real_escape_string($conn, $_POST['email4']);
$contact4 = mysqli_real_escape_string($conn, $_POST['contact4']);


if($password!=$cpassword){
    $_SESSION['status'] = "Password and Confirm Password do not match";
    header('LOCATION:registration.php');
}
else{ 
$_SESSION['name'] = $name;
  $slquery = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $slquery);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['status'] = "Email already registered!!";
    header('LOCATION:registration.php');
  }
  else{
    $sql = "INSERT INTO users (team_name, leader_name, contact, email, password, sector, other, size, name1, email1, contact1, name2, email2, contact2, name3, email3, contact3, name4, email4, contact4) VALUES ('$team_name', '$leader_name','$contact', '$email', '$password', '$sector', '$other', '$size', '$name1', '$email1', '$contact1', '$name2', '$email2', '$contact2', '$name3', '$email3', '$contact3', '$name4', '$email4', '$contact4')";
    if ($conn->query($sql) === TRUE) {
      header('LOCATION:Questionaire.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
  }
}
   
}
?>