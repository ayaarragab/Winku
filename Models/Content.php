<?php

class Content {
    public $id;
    public $username;
    public $publishedDate;
    public $body;
    public $numOfReacts;
    public $numOfReports;
    public $numOfViews;
    public $title;

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

    public function getNumReacts() {
        return $this->numOfReacts;
    }

    public function getNumReports() {
        return $this->numOfReports;
    }

    public function getNumViews() {
        return $this->numOfViews;
    }
}
