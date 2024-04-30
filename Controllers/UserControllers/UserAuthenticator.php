<?php
require_once '../auth/Authenticator.php';
require_once '../UserControllers/userMapper.php';
class UserAuthenticator extends Authenticator{
    public static function valueAssociativeArr($arr)
    {
        $allNull = true;
        foreach ($arr as $attr => $value) {
            if ($value !== null) {
                $allNull = false;
                break;
            }
        }
        return $allNull;
    }
    public static function register($Rname , $Remail , $Rpass , $Rusername , $Rgender)
    {
            $arr_Err=array("nameErr"=>"" , "usernameErr"=>"" , "emailErr"=>"" , "passErr"=>"" );
            if(empty($Rname ))
            {
                $arr_Err["nameErr"]="* Name is requird";
            }else{
                $Rname = self::checkInput($Rname );
                if(!preg_match("/^[a-zA-Z-' ]*$/",$Rname))
                {
                    $arr_Err["nameErr"] = "* Only letters and white space allowed";
                }
            }

            if(empty($Rusername))
            {
                $arr_Err["usernameErr"]="* Username is requird";
            }

            if(empty($Remail)){
                $arr_Err["emailErr"] = "* Email is required";
            }elseif(!filter_var( self::checkInput($Remail) , FILTER_VALIDATE_EMAIL)){
                $arr_Err["emailErr"] = "* Invalid email format";
            }


            if(empty($Rpass)){
                $arr_Err["passErr"] = "* Password is required";
            }else{
                if(strlen($Rpass)<8){
                    $arr_Err["passErr"] = "* It is too short";
                }elseif(!empty($Remail))
                {
                    $emailParts = explode('@', $Remail);
                    $password = self::checkinput($Rpass);
                    $hashp = password_hash($password,PASSWORD_DEFAULT);
                    if($emailParts[0]==$Rpass)
                    {
                        $arr_Err["passErr"] = "* Error: Password cannot be the same as the email address.";
                    }elseif (!password_verify($password,$hashp)) {
                        $arr_Err["passErr"] = "* Invalid password";
                    }
                }
}
        if(!self::valueAssociativeArr($arr_Err)){
            $Rname =  self::checkInput($Rname);
            $Remail = self::checkInput($Remail);
            $Rpass = sha1(self::checkInput($Rpass));
            $Rusername = self::checkInput($Rusername);
            if($Rname && $Remail && $Rpass && $Rusername){
                if (isset($_POST['genderMale'])) {
                    $Rgender = 0;
                } elseif(isset($_POST['genderFemale'])) {
                    $Rgender = 1;
                }
                // my edit -Aya-
                
                $isduplicateEamil = UserMapper::searchAttribute($Remail);
                $isduplicateName = UserMapper::searchAttribute($Rusername);
                if ($isduplicateEamil) {
                    echo 'duplicate email';
                }
                else if ($isduplicateName) {
                    echo 'duplicate username';
                }
                else{
                        $user = new User($Rgender, $Rusername, $Remail, $Rpass, $Rname);
                        $check = UserMapper::add($user);
                        if($check){
                            return "success";
                        }else{
                            return "somethingWrong";
                        }
                }
            }else{
                return "missingError";
            }
        }else {
            return $arr_Err;
        }

    }
}