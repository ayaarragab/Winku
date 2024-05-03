<?php
class Person{
    private $id;
    private $fullName;
    private $username;
    private $gender;
    private $email;
    private $password;
    private $numAnswers;
    private $numFollowers;
    private $numFollowings;
    private $profilePhoto;
    private $bio;
    private $country;
    private $professionalTitle;
    public function __construct($fullName, $username, $gender, $email, $password) {
        $this->gender = $gender;
        $this->fullName = $fullName;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->numAnswers = 0;
        $this->numFollowers = 0;
        $this->numFollowings = 0;
        $this->profilePhoto = 'no photos added yet';
        $this->bio = 'no bio added yet';
        $this->country = 'no country specified yet';
        $this->professionalTitle = 'no title specified yet';
    }
    public function getid(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getgender(){
        return $this->gender;
    }

    public function setgender($gender){
        $this->gender = $gender;
    }

    public function getfullName(){
        return $this->fullName;
    }

    public function setfullName($fullName){
        $this->fullName = $fullName;
    }


    public function getusername(){
        return $this->username;
    }

    public function setusername($username){
        $this->username = $username;
    }

    public function getemail() {
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getpassword(){
        return $this->password;
    }

    public function setPassword( $password) {
        $this->password = $password;
    }

    public function getnumAnswers(){
        return $this->numAnswers;
    }

    public function setNumAnswers( $numAnswers){
        $this->numAnswers = $numAnswers;
    }

    public function getnumFollowers($id){
        $result =userfollowermapper::numOfRow($id,'followerId');
        return $result;
    }

    public function setnumFollowers($numFollowers) {
        $this->numFollowers = $numFollowers;
    }

    public function getnumFollowings($id){
        $result =userfollowermapper::numOfRow($id,'userId');
        return $result;
    }

    public function setnumFollowings($numFollowings) {
        $this->numFollowings = $numFollowings;
    }

    public function getprofilePhoto(){
        return $this->profilePhoto;
    }

    public function setprofilePhoto($profilePhoto){
        $this->profilePhoto = $profilePhoto;
    }

    public function getbio() {
        return $this->bio;
    }

    public function setBio( $bio){
        $this->bio = $bio;
    }

    public function getcountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function getprofessionalTitle() {
        return $this->professionalTitle;
    }

    public function setProfessionalTitle( $professionalTitle){
        $this->professionalTitle = $professionalTitle;
    }
    // public function AnswerQuestion($questionId, $answerContent): bool {
    //     # هنرجعلها
    // }
}