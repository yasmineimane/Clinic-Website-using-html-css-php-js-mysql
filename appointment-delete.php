<?php
    include('function.php');
    session_start();

    $paramResult = checkParamId('id');
    if (is_numeric($paramResult))
    {
        $appId = validate($paramResult);
        $userEmail = $_SESSION['email'];

        $appointment = getById('appointement', $appId);
        if ($appointment['status'] == 200)
        {
            $appDeleteRes = deleteQuery('appointement', $appId);

            if ($appDeleteRes)
            {
                redirect('appointment.php', 'Appointement Deleted Successfully');
            }else {
                redirect('appointment.php', 'Something went wrong');
            }
        }else {
            redirect('appointment.php', $appointment['message']);
        }
    }else {
        redirect('appointment.php', $paramResult);
    }
?>