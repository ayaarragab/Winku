<?php
abstract class Person{
    private $id;
    private $gender;
    private $firstName;
    private $secondName;
    private $username;
    private $email;
    private $password;
    private $numAnswers;
    private $numFollowers;
    private $numFollowings;
    private $profilePhoto;
    private $bio;
    private $country;
    private $professionalTitle;
    public function __construct(string $gender, string $firstName, string $secondName, string $username, string $email, string $password, int $numAnswers, int $numFollowers, int $numFollowings, string $profilePhoto, string $bio, string $country, string $professionalTitle) {
        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->numAnswers = $numAnswers;
        $this->numFollowers = $numFollowers;
        $this->numFollowings = $numFollowings;
        $this->profilePhoto = $profilePhoto;
        $this->bio = $bio;
        $this->country = $country;
        $this->professionalTitle = $professionalTitle;
    }
    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function setGender(string $gender): void {
        $this->gender = $gender;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function getSecondName(): string {
        return $this->secondName;
    }

    public function setSecondName(string $secondName): void {
        $this->secondName = $secondName;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function getNumAnswers(): int {
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

    public function getProfilePhoto(): string {
        return $this->profilePhoto;
    }

    public function setProfilePhoto(string $profilePhoto): void {
        $this->profilePhoto = $profilePhoto;
    }

    public function getBio(): string {
        return $this->bio;
    }

    public function setBio(string $bio): void {
        $this->bio = $bio;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function getProfessionalTitle(): string {
        return $this->professionalTitle;
    }

    public function setProfessionalTitle(string $professionalTitle): void {
        $this->professionalTitle = $professionalTitle;
    }
    // public function AnswerQuestion($questionId, $answerContent): bool {
    //     # هنرجعلها
    // }
}