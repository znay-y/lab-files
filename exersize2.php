<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; // "" for XAMPP, "root" for MAMP
$dbname = "ecs417";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['Fname'];
$sname = $_POST['Lname'];
$email = $_POST['usermail'];
$pass = $_POST['password'];

$sql = "INSERT INTO USERS (firstName, lastName, email, password)
VALUES ('$fname', '$sname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<a href="exersize2.html">
    <button>
        Go back to registration
    </button>
</a>