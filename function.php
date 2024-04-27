<?php
    include "dbconnect.php";

    function validate($inputData)
    {
        global $conn;

        $validatedData = mysqli_real_escape_string($conn, $inputData);
        
        return trim($validatedData);
    }

    function redirect($url, $message)
    {
        $_SESSION['status'] = $message;
        header('Location: '.$url);
        exit(0);
    }

    function alertMessage()
    {
        if (isset($_SESSION['status']))
        {
            echo '<div class="alert_message">
                <h5>'.$_SESSION['status'].'</h5>
            </div>';

            unset($_SESSION['status']);
        }
    }


    function getAll($tableName)
    {
        global $conn;

        $table = validate($tableName);

        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn, $query);

        return $result;
    }

    function checkParamId($paramType)
    {
        if(isset($_GET[$paramType]))
        {
            if ($_GET[$paramType] != null)
            {
                return $_GET[$paramType];
            } else
            {
                return 'No id found';
            }
        } else
        {
            return 'No id given';
        }
    }
    function getById($tableName, $id)
    {
        global $conn;

        $table = validate($tableName);
        $id = validate($id);

        $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result)
        {
            if (mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $response = [
                    'status' => 200,
                    'message' => 'Fetched Data',
                    'data' => $row
                ];
                return $response;
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'No Data Record'
                ];
                return $response;
            }
        }else {
            $response = [
                'status' => 500,
                'message' => 'Something Went Wrong'
            ];

            return $response;
        }
    }

    function getByDate($tableName, $fromDate, $toDate)
    {
        global $conn;

        $table = validate($tableName);
        $fromDate = validate($fromDate);
        $toDate = validate($toDate);

        $query = "SELECT * FROM $table WHERE dateA BETWEEN '$fromDate' AND '$toDate'";
        $result = mysqli_query($conn, $query);

        return $result;
    }
    

    function getByEmail($tableName, $email)
    {
        global $conn;

        $table = validate($tableName);
        $email = validate($email);

        $query = "SELECT * FROM $table WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        return $result;
    }

    function order($tableName, $element)
    {
        global $conn;

        $table = validate($tableName);
        $element = validate($element);

        $query = "SELECT * FROM $table ORDER BY $element DESC";
        $result = mysqli_query($conn, $query);

        return $result;
    }

    function deleteQuery($tableName, $id)
    {
        global $conn;

        $table = validate($tableName);
        $id = validate($id);

        $query = "DELETE FROM $table WHERE Id='$id' LIMIT 1";
        $result = mysqli_query($conn, $query);

        return $result;
    }