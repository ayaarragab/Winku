<?php
require_once '../controllers/dbControllers.php';
class User{
    public $username;
    public $password;
    public $id;
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function getUsername()
    {
        $username = DBMapper::retrieveSpecificAttr('users', $_SESSION['userId'], 'username');
        if ($username) {
            return $username;
        }
        return 'sth went wrong';
    }
}