<?php
if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$dbconnect = mysqli_connect('localhost','root','','database123');

$sql = mysqli_query($dbconnect, "insert into entry_details (firstname, lastname, email, password) values('$firstname','$lastname','$email','$password')");

if($sql){
  echo "Inserted";
}
else{
  echo "Error";
}

}



// if(mysqli_connect_error($dbconnect)){
//   echo "Failed to connect";
// }
// else{
//   echo "Connection Succesfull";
// }

  // $servername="localhost";
  // $username="root";
  // $password="";
  // $database_name="database123";

  // $conn = mysqli_connect($servername,$username,$password,$database_name);

  // if(!$conn){
  //   die("Connection Failed:" .mysqli_connect_error());
  // }
  
  // if(isset($_POST['save'])){
  //    $first_name = $_POST['first_name'];
  //    $last_name = $_POST['last_name'];
  //    $email = $_POST['email'];

  //    $sql_query = "INSERT INTO entry_details (first_name,last_name,email)
  //    VALUES ('$first_name','$last_name','$email')";

  //    if(mysqli_query($conn,$sql_query)){
  //      echo "New details Entry inserted succesfully";
  //    }
  //    else{
  //      echo "Error :" + $sql . "" .mysqli_error($conn);
  //    }
  //    mysqli_close($conn);
//   }
?>