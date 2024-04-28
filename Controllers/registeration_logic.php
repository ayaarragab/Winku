<?php
require_once '../controllers/userController.php';
$errorArr = array('passwordErrorMsg' => '', 'usernameErrorMsg' => '');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $userId = UserController::registerUser($_POST['username'], $_POST['password']);
    if (is_int($userId)) {
        session_start();
        $_SESSION['userId'] = $userId;
        $_SESSION['username'] = $_POST['username'];
        echo 'You succesfully registered!';
    }
    else {
        $errorArr = UserController::errorHandler($_POST['username'], $_POST['password']);
    }
}