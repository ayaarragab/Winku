<?php
class UserFollower{
    public $userId;
    public $followerId;
    public function __construct($userId, $followerId) {
        $this->followerId = $followerId;
        $this->userId = $userId;
    }

    public static function getUserFollowers($userId) {
    }

    public static function getUserFollowings($userId) {
    }

    public static function getNumUserFollowers($userId) {
    }

    public static function getNumUserFollowings($userId) {
    }
}
