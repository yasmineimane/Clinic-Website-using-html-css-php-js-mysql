<?php
    include "dbconnect.php";
    include("sidebar.php");
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="./style/users.css">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        User Lists
                    </h4>
                    <a href="user-create.php" class="btn">Add User</a>
                </div>
                <div class="card-body">
                    <?php alertMessage();?>
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of birth</th>
                            <th>Blood</th>
                            <th>Adress</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                                $users = getAll('patient');

                                if (mysqli_num_rows($users) > 0)
                                {
                                    foreach($users as $user)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $user['Id']; ?></td>
                                                <td><?= $user['First_Name']; ?></td>
                                                <td><?= $user['Last_Name']; ?></td>
                                                <td><?= $user['Date_of_birth']; ?></td>
                                                <td><?= $user['blood']; ?></td>
                                                <td><?= $user['adress']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td>
                                                    <a href="users-edit.php?Id=<?= $user['Id']; ?>" class="btn">Edit</a>
                                                    <a href="users-delete.php?Id=<?= $user['Id']; ?>" class="btn danger"
                                                    onclick="return confirm('Are You Sure You Want to Delete this data?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="8">No Record</td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>