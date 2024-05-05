<?php
require_once "../../Models/Person.php";

class AdminBuilder extends Person {

    public function __construct($username, $email, $password) {
        // Call the parent constructor
        parent::__construct('admin', $username, $email, $password, 'admin');
    }
}
?>