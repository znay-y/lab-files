<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    $servername = "127.0.0.1";
    $username = "root";
    $password = ""; // "" for XAMPP, "root" for MAMP
    $dbname = "ecs417";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // HANDLE LOGIN FIRST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM USERS WHERE email='$email' AND password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['userID'] = $row['ID'];
            $_SESSION['name'] = $row['firstName'];
        }
    }

    // THEN CHECK SESSION
    if (isset($_SESSION['userID'])) {
        echo "Welcome " . $_SESSION['name'];
        echo '<br><a href="logout.php">Logout</a>';
        exit();
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        $email = $_POST['email'];
        $pass = $_POST['password'];

        // check database
        $sql = "SELECT * FROM USERS WHERE email='$email' AND password='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['userID'] = $row['ID']; // store user ID
            $_SESSION['name'] = $row['firstName']; // store name


        }
    }
    $conn->close();
    ?>

</body>

</html>