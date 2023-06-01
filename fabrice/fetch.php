<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php

            include 'connect.php';

            $sql = mysqli_query($conn, "SELECT * FROM fabrice");

            if (mysqli_num_rows($sql)) {
                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['password']?></td>
                            <td><button><a href="update.php?demo= <?php echo $row['id']?>">Update</a></button></td>
                            <td><button><a href="delete.php?demo= <?php echo $row['id']?>" onclick="confirm('Are you sure you want to delete it')">Delete</a></button></td>
                        </tr>
                    <?php
                }
            }

        ?>
    </table>
</body>
</html>