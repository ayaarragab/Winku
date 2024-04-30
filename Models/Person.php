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
    public function __construct($gender, $username, $email, $password, $fullName) {
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
    public function getid(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getgender(): string {
        return $this->gender;
    }

    public function setgender(string $gender): void {
        $this->gender = $gender;
    }

    public function getfullName(): string {
        return $this->fullName;
    }

    public function setfullName(string $fullName): void {
        $this->fullName = $fullName;
    }


    public function getusername(): string {
        return $this->username;
    }

    public function setusername(string $username): void {
        $this->username = $username;
    }

    public function getemail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getpassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function getnumAnswers(): int {
        return $this->numAnswers;
    }

    public function setNumAnswers(int $numAnswers): void {
        $this->numAnswers = $numAnswers;
    }

    public function getnumFollowers(): int {
        return $this->numFollowers;
    }

    public function setnumFollowers(int $numFollowers): void {
        $this->numFollowers = $numFollowers;
    }

    public function getnumFollowings(): int {
        return $this->numFollowings;
    }

    public function setnumFollowings(int $numFollowings): void {
        $this->numFollowings = $numFollowings;
    }

    public function getprofilePhoto(): string {
        return $this->profilePhoto;
    }

    public function setprofilePhoto(string $profilePhoto): void {
        $this->profilePhoto = $profilePhoto;
    }

    public function getbio(): string {
        return $this->bio;
    }

    public function setBio(string $bio): void {
        $this->bio = $bio;
    }

    public function getcountry(): string {
        return $this->country;
    }

    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function getprofessionalTitle(): string {
        return $this->professionalTitle;
    }

    public function setProfessionalTitle(string $professionalTitle): void {
        $this->professionalTitle = $professionalTitle;
    }
    // public function AnswerQuestion($questionId, $answerContent): bool {
    //     # هنرجعلها
    // }
}