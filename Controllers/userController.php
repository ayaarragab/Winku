<?php

require_once '../controllers/dbControllers.php';
require_once '../models/User.php';
class UserController{
    public static function registerUser($username, $password) {
        if (!UserController::validateInput($username, $password))
            return false;
        if (UserController::userExists($username, $password)){
            echo 'user already exists!';

            return false;
        } 
        // Insert new user into the database
        $user = new User($username, $password);
        // db::insert('users', $user);
        return DBMapper::add('users', $user);
        // return db::getConnection()->insert_id;
    }
    public static function validateInput($username, $password) {
        if (empty($username) || empty($password)) {
            return false;
        }
        return true;
    }
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
}
