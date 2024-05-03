<?php
class bookmark{
    protected $questionId;
    protected $userId;
    public function __construct($questionId,$userId ) {
        $this->questionId = $questionId;
        $this->userId= $userId;
    }
}