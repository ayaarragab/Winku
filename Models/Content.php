<?php

class Content {
    protected $id;
    protected $username;
    protected $publishedDate;
    protected $body;
    protected $numOfReacts;
    protected $numOfReports;
    protected $numOfViews;
    protected $title;

    protected function __construct($title, $username, $body) {
        $this->title=$title;
        $this->username = $username;
        $this->body = $body;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getUsername() {
        return $this->username;
    }

    public function getBody() {
        return $this->body;
    }

    public function getViews() {
        return $this->numOfViews;
    }

    public function edit($newContent) {
        $this->body = $newContent;
        // Update content in the database
    }

    public function delete() {
        // Delete content from the database
    }

    public function getNumOfReacts() {
        return $this->numOfReacts;
    }

    public function getNumOfReports() {
        return $this->numOfReports;
    }

    public function getNumOfViews() {
        return $this->numOfViews;
    }
    public function getPublishedDate(){
        return $this->publishedDate;
    }
}
