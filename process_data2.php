<?php
// Database configuration
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "wt_project_mca"; 


$name = $_GET['name'];
$email = $_GET['e_id'];
$batch = $_GET['batch'];
$msg = $_GET['msg'];



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['name']) && isset($_GET['e_id']) && isset($_GET['batch']) && isset($_GET['msg'])) {
    
   
   
    $sql = "INSERT INTO contact_us (name, e_id, batch, msg) VALUES ('$name', '$email', '$batch', '$msg')";

    if ($conn->query($sql) === TRUE) {

           echo '<script type="text/javascript">';
           echo ' alert("Message Sent..")';  
           echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    
    echo "Missing parameters!";
}


$conn->close();
?>
