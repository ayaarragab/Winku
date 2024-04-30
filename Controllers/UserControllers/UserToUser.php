<?php
class UserToUser{
    public function reportUser($userId)
    {
        // Add logic to report a user
    }

    public function followUser($username)
    {
        UserController::incrementData('users', 'numFollowings', $username, $this);
        UserController::incrementDataDB('users', 'numFollowings', $username);
        $followerId = DBMapper::retrieveSpecificAttr('users', $username, 'id');
        $userfollower = new UserFollower($this->getId(), $followerId); // implement retrieve by username
    }
    public function unfollowUser($username){}
}
