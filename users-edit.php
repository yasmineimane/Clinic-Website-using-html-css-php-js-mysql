<?php
    include("dbconnect.php");
    include("sidebar.php");
    include ("function.php");

    if (isset($_POST['editUser']))
    {
        $firstName = validate($_POST['fname']);
        $lastName = validate($_POST['lname']);
        $dateOfBirth = $_POST["dobirth"];
        $blood = $_POST["blood"];
        $adress = $_POST["adress"];
        $email = validate($_POST['email']);

        $userId = validate($_POST['userId']);
        $user = getById('patient', $userId);
        if ($user['status'] != 200)
        {
            redirect('users-edit.php?Id='.$userId, 'No Such Id Found');
        }

        if ($firstName != '' || $lastName != '' || $dateOfBirth != '' || $blood != '' || 
        $adress != '' || $email != '')
        {
            $query = "UPDATE patient SET 
                First_Name = '$firstName',
                Last_Name = '$lastName',
                Date_of_birth = '$dateOfBirth',
                blood = '$blood',
                adress = '$adress',
                email = '$email'
                WHERE Id='$userId';";
            
            $result = mysqli_query($conn, $query);

            if ($result)
            {
                redirect('users.php', 'Updated Successfully');
            }else {
                redirect('users-edit.php?Id='.$userId, 'Something Went Wrong');
            }
        }else {
            redirect('users-edit.php?Id='.$userId, 'Please Fill All the Input Fields');
        }
    }

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
                        Edit User
                    </h4>
                    <a href="users.php" class="btn danger">Back</a>
                </div>

                <div class="card-body">
                    <form action="#", method="POST">
                        <?php
                            alertMessage();
                            $paramResult = checkParamId('Id');
                            if (!is_numeric($paramResult))
                            {
                                echo '<h5>'.$paramResult.'<h5>';
                                return false;
                            }

                            $user = getById('patient', checkParamId('Id'));
                            if ($user['status'] == 200)
                            {
                                ?>
                                <input type="hidden" name="userId" value="<?= $user['data']['Id']; ?>">
                                <div class="mb-4">
                                    <input type="text" required name="fname" value="<?= $user['data']['First_Name']; ?>">
                                    <label>First Name</label>
                                </div>
                                <div class="mb-4">
                                    <input type="text" required name="lname" value="<?= $user['data']['Last_Name']; ?>">
                                    <label>Last Name</label>
                                </div>
                                <div class="mb-4">
                                    <input type="date" required name="dobirth" value="<?= $user['data']['Date_of_birth']; ?>">
                                    <label>Date of birth</label>
                                </div>
                                <div class="mb-4">
                                    <input type="text" required name="blood" value="<?= $user['data']['blood']; ?>">
                                    <label>Blood</label>
                                </div>
                                <div class="mb-4">
                                    <input type="text" required name="adress" value="<?= $user['data']['adress']; ?>">
                                    <label>Adress</label>
                                </div>
                                <div class="mb-4">
                                    <input type="email" required name="email" value="<?= $user['data']['email']; ?>">
                                    <label>Email</label>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" name="editUser" class="btn btnSave">Edit</button>
                                </div>
                                <?php
                            } else {
                                echo '<h5>'.$user['message'].'<h5>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>