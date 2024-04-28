<?php
require_once '../controllers/dbControllers.php';
require_once 'Person.php';
require_once 'Question.php';
class User extends Person
{
    private $numQuestions;
    private $password;
    private $privilgedOrNot;
    private $numberOfReports;
    private $numOfBadges;

    private $numFollowers;

    private $numFollowings;
    private $badges;
    private $reputations;
    private $suggestedCategories;

    public function __construct($numQuestions, $suggestedCategory, $reputations, $badges, $numOfBadges, $password, $privilgedOrNot, $numberOfReports, $gender, $firstName, $secondName, $username, $email, $numAnswers, $numFollowers, $numFollowings, $profilePhoto, $bio, $country, $professionalTitle)
    {
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

    public function setnumQuestions($num)
    {
    }
    public function setnumberOfReports($num)
    {
    }
    public function setnumOfBadges($num)
    {
    }

    public function setreputations($set)
    {
    }

    public function setsuggestedCategory($suggestedCategories)
    {
        $this->suggestedCategories = $suggestedCategories;
    }

    public function getNumQuestions()
    {
        return $this->numQuestions;
    }


    public function isPrivilged()
    {
        return $this->privilgedOrNot;
    }


    public function getNumberOfReports()
    {
        return $this->numberOfReports;
    }

    public function getNumOfBadges()
    {
        return $this->numOfBadges;
    }

    public function getBadges()
    {
        return $this->badges;
    }


    public function getReputations()
    {
        return $this->reputations;
    }

    public function getSuggestedCategory()
    {
        return $this->suggestedCategories;
    }

    public function addQuestion($title, $content, $tags)
    {
    }

    public function addQuestionToSubcategory($content, $categoryId, $subcategoryId)
    {
        // Add logic to add the question to the specified subcategory
    }

    public function deleteQuestion($questionId)
    {
        // Add logic to delete the question
    }

    public function deleteQuestionOfSubcategory($questionId, $categoryId, $subcategoryId)
    {
        // Add logic to delete the question from the specified subcategory
    }

    public function reactToAnAnswer($answerId)
    {
        // Add logic to react to an answer
    }

    public function bookmarkQuestion($questionId)
    {
        // Add logic to bookmark a question
    }

    public function joinSubcategory($subcategoryId)
    {
        // Add logic to join a subcategory
    }

    public function followCategory($categoryId)
    {
        // Add logic to follow a category
    }

    public function leaveSubcategory($subcategoryId)
    {
        // Add logic to leave a subcategory
    }

    public function unfollowCategory($categoryId)
    {
        // Add logic to unfollow a category
    }

    public function reportQuestion($questionId)
    {
        // Add logic to report a question
    }

    public function reportAnswer($answerId)
    {
        // Add logic to report an answer
    }

    public function reportCategory($categoryId)
    {
        // Add logic to report a category
    }

    public function reportSubcategory($subcategoryId)
    {
        // Add logic to report a subcategory
    }

    public function reportUser($userId)
    {
        // Add logic to report a user
    }

    public function recommendCategory($name, $description)
    {
        // Add logic to recommend a category
    }

    public function getNumReports()
    {
        // Add logic to get the number of reports
    }
    public function followUser($username)
    {

        UserController::incrementData('users', 'numFollowings', $username, $this);
        UserController::incrementDataDB('users', 'numFollowings', $username);
        $followerId = DBMapper::retrieveSpecificAttr('users', $username, 'id');
        $userfollower = new UserFollower($this->getId(), $followerId); // implement retrieve by username
    }
}
