<?php

    include 'connect.php';

    $demo1 = $_GET['demo'];

    $sql = mysqli_query($conn, "SELECT * FROM fabrice WHERE id = '$demo1'");

    while ($row = mysqli_fetch_array($sql)) {
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
        <label for="Userid">User Id</label><br>
        <input autofocus type="text" name="userid" id="userid" value="<?php echo $row['id']?>"><br><br>

        <label for="username">Username</label><br>
        <input autofocus type="text" name="username" id="username" value="<?php echo $row['username']?>"><br><br>

        <label for="email">Email</label><br>
        <input autofocus type="email" name="email" id="email" value="<?php echo $row['email']?>"><br><br>

        <label for="password">Password</label><br>
        <input autofocus type="password" name="password" id="password" value="<?php echo $row['password']?>"><br><br>

        <input type="submit" value="Update" name="submit">
        <button><a href="fetch.php">Cancel</a></button>
    </form>

    <?php
        
        }

    ?>
        <?php

            include 'connect.php';

            if (isset($_POST['submit'])) {
                $id = $_POST['userid'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = mysqli_query($conn, "UPDATE fabrice SET id = '$id', username = '$username', email = '$email', password = '$password' WHERE id = '$demo1'");

                if ($sql) {
                    header("location: fetch.php");
                } else {
                    echo "<script>alert('Updating Failed')</script>";
                }
            }

        ?>
        <!-- Pushing to github  -->
</body>
</html>