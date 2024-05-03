<?php

class Content {
    protected $id;
    protected $username;
    protected $publishedDate;
    protected $body;
    protected $numOfReports;

    protected function __construct($username, $body) {
        $this->username = $username;
        $this->body = $body;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getBody() {
        return $this->body;
    }


    public function getNumOfReacts() {
        return $this->numOfReacts;
    }

    public function getNumOfReports() {
        return $this->numOfReports;
    }

   
    public function getPublishedDate(){
        return $this->publishedDate;
    }
}
