<?php
$controllers = glob('../Controllers/UserControllers/*.php');
foreach ($controllers as $controller) {
    require_once $controller;
}
class User
{
    public $builder;
    public $userToQuestion;
    public $userToUser;
    public $userToAnswer;
    public $userToCategory;
    public $userToSubcategory;
    public $auth;
    public $mapper;
    public function __construct($gender, $username, $email, $password, $fullName)
    {
        $this->builder = new UserBuilder($gender, $username, $email, $password, $fullName);
        $this->userToQuestion = new UserToQuestion();
        $this->userToUser = new UserToUser();
        $this->userToAnswer = new UserToAnswer();
        $this->userToCategory = new UserToCategory();
        $this->userToSubcategory = new UserToSubcategory();
        $this->auth = new UserAuthenticator();
    }
}
