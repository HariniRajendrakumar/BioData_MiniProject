<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biodata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $finame = htmlspecialchars($_POST['finame']);
    $laname = htmlspecialchars($_POST['laname']);
    $email = htmlspecialchars($_POST['email']);
    $pno = htmlspecialchars($_POST['pno']);
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender= htmlspecialchars($_POST['gender']);
    $bio = htmlspecialchars($_POST['bio']);
}
?>