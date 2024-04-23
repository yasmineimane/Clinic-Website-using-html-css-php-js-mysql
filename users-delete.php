<?php
    include('function.php');

    $paramResult = checkParamId('Id');
    if (is_numeric($paramResult))
    {
        $userId = validate($paramResult);

        $user = getById('patient', $userId);
        if ($user['status'] == 200)
        {
            $userDeleteRes = deleteQuery('patient', $userId);

            if ($userDeleteRes)
            {
                redirect('users.php', 'User Deleted Successfully');
            }else {
                redirect('users.php', 'Something went wrong');
            }
        }else {
            redirect('users.php', $user['message']);
        }
    }else {
        redirect('users.php', $paramResult);
    }
?>