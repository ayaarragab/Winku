<?php
require_once '../controllers/dbControllers.php';
require_once '../models/User.php';

class UserController{

    private static function userExists($username, $password) {
        // $data = db::fetch('SELECT username FROM users WHERE username = "'.$username.'"'.' AND password ="'.$password.'";');
        $data = DBMapper::retrieve('users',  array('username' => $username, 'password' => $password));
        return !empty($data);
    }
    public static function errorHandler($username, $password)
    {
        if (empty($username) && empty($password)) {
            return array('passwordErrorMsg' =>'<p class="errorMsg">Please enter your credintals!</p>','usernameErrorMsg' => '');
        }
        else if (empty($username)) {
            return array('usernameErrorMsg' =>'<p class="errorMsg">Username is required!</p>', 'passwordErrorMsg' => '');
        }
        else if (empty($password)) {
            return array('passwordErrorMsg' =>'<p class="errorMsg">Password is required!</p>','usernameErrorMsg' => '');
        }
    }
    public static function deleteAccount(){
        session_start();
        DBMapper::delete('users', $_SESSION['userId']);
    }
    public static function updateData($objectId, $arrOfKeyValue)
    {
        if (isset($_SESSION) && isset($_SESSION['userId'])) {
            DBMapper::edit('users', $_SESSION['userId'], $arrOfKeyValue);
        }   
    }
    public static function incrementData($tableName, $columnName, $id, $object)
    {
        $value = intval(DBMapper::retrieveSpecificAttr($tableName, $id, $columnName));
        if (is_int($value)) {
            UserController::updateData($id, array($columnName => ++$value));
            call_user_func([$object, 'set'.$columnName], $value);
        }
        else {
            echo 'Error in updating data';
        }
    }
    public static function incrementDataDB($tableName, $columnName, $uniqueIdentifier)
    {
        $value = intval(DBMapper::retrieveSpecificAttr($tableName, $uniqueIdentifier, $columnName));
        if (is_int($value)) {
            UserController::updateData($$uniqueIdentifier, array($columnName => ++$value));
        }
        else {
            echo 'Error in updating data';
        }
    }







}

