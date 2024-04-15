<?php
    include("sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of birth</th>
                            <th>Blood</th>
                            <th>Adress</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>23/06/2003</td>
                                <td>O+</td>
                                <td>AZEFRGHNBVCX</td>
                                <td>YASMINE@GMAIL.COM</td>
                                <td>admin</td>
                                <td>
                                    <a href="users-edit.php" class="btn">Edit</a>
                                    <a href="users-delete.php" class="btn danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>