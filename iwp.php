<?php

        $name  = $_POST['name'];
        $id = $_POST['id'];
        $date  = $_POST['dt'];
        $color = $_POST['color'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        
        $servername = "localhost";
$username = "root";
$password = "";

// echo ($_GET["username"]);
$conn = new mysqli($servername, $username, $password, "iwp_project");
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
        //Original second customer 1 	na 	2022-02-01 	green 	2147483647 	abc@x.com
        //Original third customer 2 	Mike 	2022-02-01 	red 	2147483647 	ab2@x.com
        $sql = "DELETE FROM proj WHERE id='3'";
  if(mysqli_query($conn, $sql)){
    echo ("Done");
  } else{
    echo "error";
    exit;
  
  }
        $conn->close();
        ?>