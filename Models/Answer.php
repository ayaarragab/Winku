<?php 
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Models\Content.php';
class Answer extends Content {
    protected $questionId;

    public function __construct($username, $body, $questionId, $publishedDate, $numOfReacts, $numOfReports) {
        parent::__construct($username, $body);
        $this->questionId = $questionId;
        $this->publishedDate = $publishedDate;
        $this->numOfReacts = $numOfReacts;
        $this->numOfReports = $numOfReports;
    }

    public function getQuestionId() {
        return $this->questionId;
    }
}