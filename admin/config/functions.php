<?php

session_start();
require('connect.php');

function validate($inputData)
{
    global $conn;

    $validateData = mysqli_real_escape_string($conn, $inputData);
    return trim($validateData);
}

function redirect($url, $status)
{

    $_SESSION['status'] = $status;
    header("Location: " . $url);
    exit(0);
}

function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo '
            <div class = "alert alert-success text-white">
           <h6> ' . $_SESSION['status'] . ' </h6>
            </div>

        ';
        unset($_SESSION['status']);
    }
}

// select all from table
function getAll($tableName)
{
    global $conn;
    $table = validate($tableName);
    $sql = " SELECT * FROM $table";
    /** @var TYPE_NAME $result */
    $result = mysqli_query($conn, $sql);

    return $result;
}

// getting id
function checkParamId($paramType)
{
    if (isset($_GET[$paramType])) {
        if ($_GET[$paramType] != null) {
            return $_GET[$paramType];
        } else {
            return 'No id found';
        }
    } else {
        return 'No id given';
    }
}


// select all fields associated with particular id
function getById($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);
    $sql = "SELECT * FROM $table where id= '$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            /** @var TYPE_NAME $response */
            $response = [
                'status' => 200,
                'message' => 'Fetched data',
                'data' => $row,
            ];
        } else {
            /** @var TYPE_NAME $response */
            $response = [
                'status' => 404,
                'message' => 'No data id found'
            ];
        }
    } else {
        /** @var TYPE_NAME $response */
        $response = [
            'status' => 404,
            'message' => 'No data id found'
        ];
    }
    return $response;
}

// delete function
function deleteQuery($tableName, $id)
{
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
    /** @var TYPE_NAME $result */
    $result = mysqli_query($conn, $query);
    return $result;

}


