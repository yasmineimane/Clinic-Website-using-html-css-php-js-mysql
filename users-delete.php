<?php
    include('function.php');

    $paramResult = checkParamId('Id');
    if (is_numeric($paramResult))
    {
        $userId = validate($paramResult);

        $appointment = getById('patient', $userId);
        if ($appointment['status'] == 200)
        {
            $userDeleteRes = deleteQuery('patient', $userId);

            if ($userDeleteRes)
            {
                redirect('users.php', 'User Deleted Successfully');
            }else {
                redirect('users.php', 'Something went wrong');
            }
        }else {
            redirect('users.php', $appointment['message']);
        }
    }else {
        redirect('users.php', $paramResult);
    }
?>