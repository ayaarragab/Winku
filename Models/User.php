<?php
require_once '../controllers/dbControllers.php';
require_once 'Models/Person.php';
class User extends Person{
    private $numQuestions;
    private $password; 
    private $privilgedOrNot;
    private $numberOfReports;
    private $numOfBadges;
    private $badges;
    private $reputations;
    private $suggestedCategories;

    public function __construct($numQuestions, $suggestedCategory ,$reputations ,$badges, $numOfBadges, $password, $privilgedOrNot, $numberOfReports,  $gender,  $firstName,  $secondName,  $username,  $email,  $numAnswers,  $numFollowers,  $numFollowings,  $profilePhoto,  $bio,  $country,  $professionalTitle) {
        parent::__construct($gender, $firstName, $secondName, $username, $email, $password, $numAnswers, $numFollowers, $numFollowings, $profilePhoto, $bio, $country, $professionalTitle);
        $this->numQuestions = $numQuestions;
        $this->password = $password;
        $this->privilgedOrNot = $privilgedOrNot;
        $this->numberOfReports = $numberOfReports;
        $this->numOfBadges = $numOfBadges;
        $this->badges = $badges;
        $this->reputations = $reputations;
        $this->suggestedCategory = $suggestedCategory;
    }
    public function getNumQuestions() {
        return $this->numQuestions;
    }


    public function getPrivilgedOrNot() {
        return $this->privilgedOrNot;
    }

    public function setPrivilgedOrNot($privilgedOrNot) {
        $this->privilgedOrNot = $privilgedOrNot;
    }

    public function getNumberOfReports() {
        return $this->numberOfReports;
    }


    public function getNumOfBadges() {
        return $this->numOfBadges;
    }


    public function getBadges() {
        return $this->badges;
    }


    public function getReputations() {
        return $this->reputations;
    }


    public function getSuggestedCategory() {
        return $this->suggestedCategories;
    }

    public function setSuggestedCategory($suggestedCategories) {
        $this->suggestedCategories = $suggestedCategories;
    }
}