<?php
include_once 'Content.php';

class Question extends Content {
    protected $tags;
    public function __construct($username, $body, $tags ,$publishDate, $numberOfReacts, $numberOfReports, $numberOfViews, $title){
        parent::__construct($title, $username, $body) ;
            $this->title = $title;
            $this->username = $username;
            $this->body = $body;
            $this->tags = $tags;
            $this->publishedDate = $publishDate;
            $this->numOfReacts = $numberOfReacts;
            $this->numOfReports = $numberOfReports;
            $this->numOfViews = $numberOfViews;
    }
    public function getTags()
    {
        return $this->tags;
    }
}