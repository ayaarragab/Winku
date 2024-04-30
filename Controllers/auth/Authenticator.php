<?php
class Authenticator{
    public static function login($loginUsername, $loginPass){
        $loginUsername = self::checkInput($loginUsername) ;
        $loginPass = self::checkInput($loginPass);
        echo '<br>'.$loginPass.'<br>';
        if($loginUsername && $loginPass)
        {
            $hashPassword = sha1($loginPass);
            $data1 = UserMapper::searchAttribute($loginUsername);
            if($data1)
            {
                echo $hashPassword;
                $data2 = UserMapper::searchAttribute($hashPassword);;
                if($data2)
                {
                    $objArr = UserMapper::selectObjectAsArray($loginUsername, 'username');
                    echo "You are logged in";
                    $_SESSION['userId'] = $objArr['id'];
                    $_SESSION['username'] = $objArr['username'];
                    //object
                    header('Location: ../Views/index.php');
                } else {
                    return "passError";
                }
            }else{
                return "usernameError";
            }
        }else{
            return "Please enter your email and password";
        }
    }    
    public static function check_login(){
        if(!isset($_SESSION['userId']))
            return header('Location: landing.php');
    }
    public static function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public static function validateInput($username, $password) {
        if (empty($username) || empty($password)) {
            return false;
        }
        return true;
    }
}