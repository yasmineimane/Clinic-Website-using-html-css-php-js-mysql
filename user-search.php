<?php
    include("dbconnect.php");
    include("function.php");
    include("Sidebar.php");
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
                        Search
                    </h4>
                    <a href="users.php" class="btn danger">Back</a>
                </div>
                <div class="card-body">
                    <?php alertMessage();?>
                    <form action="#" method="POST" class="search">
                        <input type="email" name="userEmail">
                        <label>User Email</label>
                        <button type="submit" name="search" class="btn">Search</button>
                    </form>
                    <div class="content">
                            <table class="table">
                                <thead>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date of Birth</th>
                                    <th>Blood</th>
                                    <th>email</th>
                                </thead>
                                <tbody>
                            <?php
                                if (isset($_POST["search"]))
                                {
                                    $userEmail = $_POST['userEmail'];
                            
                                    $users = getByEmail('patient', $userEmail);
                            
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
                                                    <td><?= $user['email']; ?></td>
                                                </tr>
                                            <?php
                                        }
                                    }else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">No User Found</td>
                                        </tr>
                                    <?php
                                    }
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>