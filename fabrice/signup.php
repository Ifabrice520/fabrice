<?php

    include 'connect.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = mysqli_query($conn, "INSERT INTO fabrice(username,email,password) VALUES('$username','$email','$password')");

        if ($sql) {
            echo "<script>alert('Inserted Successfuly')</script>";
        } else {
            echo "<script>alert('Inserting failed')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input autofocus type="text" name="username" id="username"><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Sign Up" name="submit">
    </form>
</body>
</html>