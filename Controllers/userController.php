<?php
require_once '../controllers/dbControllers.php';
require_once '../models/User.php';

class UserController{
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
    public static function add_question($username, $body, $tags, $numReacts, $numReports, $numViews, $title)
    {
        $date = date("Y-m-d");
        if (UserController::validateInputs($username, $body, $tags, $numReacts, $numReports, $numViews, $title)) {
            echo '<br>did you go here?<br>';
            $question = new Question($username, $body, $tags ,$date , "0", '0', '0', $title);
            $result = DBMapper::add('questions', $question);
            if ($result) {
                echo "Question added successfully";
            } else {
                echo "Error adding question";
            }
        }
    }
    public static function validateInputs(...$inputs)
    {
        foreach ($inputs as $input) {
            
            if ((!isset($input) || empty($input) && $input != '0')) {
                echo $input;
                return false;
            }
        }
        echo 'does that work?';
        return true;
    }
}

class UserFollower{
    public $userId;
    public $followerId;
    public function __construct($userId, $followerId) {
        $this->followerId = $followerId;
        $this->userId = $userId;
    }

    public static function getUserFollowers($userId) {
    }

    public static function getUserFollowings($userId) {
    }

    public static function getNumUserFollowers($userId) {
    }

    public static function getNumUserFollowings($userId) {
    }
}