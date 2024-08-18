<?php

require('functions.php');
// saving user
if (isset($_POST['save-user'])) {

    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);


    if (empty($name) || empty($email) || empty($phone) || empty($role) || empty($password)) {
        redirect('../add-user.php', 'Please fill all the fields');
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql =  "INSERT INTO users (name, phone, email, password, role) VALUES('$name','$phone', '$email', '$hashed_password', '$role' )";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            redirect('../users.php', 'Admin/user created succesfully');
        } else {
            redirect('../add-user.php', 'Some went wrong');
        }
    }
}
// updating user

if (isset($_POST['edit-user'])) {

    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);

    $userid = validate($_POST['userid']);
    // validating id
    $user = getById('users', $userid);
    if ($user['status'] != 200) {
        redirect('users-edit.php?id=' . $userid, 'No such id found');
    }
    // checking for possible empty fields 

    if (empty($name) || empty($email) || empty($phone) || empty($role) || empty($password)) {
        redirect('../add-user.php', 'Please fill all the fields');
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql =  "UPDATE users SET 
        name ='$name',
        phone ='$phone',
        email = '$email',
        password= '$hashed_password', 
        role ='$role' 
        WHERE id='$userid';
        ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            redirect('../users.php', 'User updated succesfully');
        } else {
            redirect('../add-user.php', 'Some went wrong');
        }
    }
}

// delete auth 
$paraResult = checkParamId('id');
if (is_numeric($paraResult)) {

    $userId = validate($paraResult);

    $user = getById('users', $userId);
    if ($user['status'] == 200) {

        $userDeleteRes = deleteQuery('users', $userId);
        if ($userDeleteRes) {

            redirect('../users.php', 'User Deleted Successfully');
        } else {

            redirect('../users.php', 'Something Went Wrong');
        }
    } else {
        redirect('../users.php', $user['message']);
    }
} else {
    redirect('../users.php', $paraResult);
}
