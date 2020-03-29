<?php

require_once "connect.php";
require_once "models/User.php";

class UserContext extends Database
{
    public function __construct()
    {

    }

    public function Add($User)
    {

        $sql = "INSERT INTO users (first_name, last_name, email,user_password,phone_number,date_of_birth,gender_id,role_id,created_datetime) VALUES (:first_name,:last_name,:email,:user_password,:phone_number,:date_of_birth,:gender_id,:role_id,:created_datetime)";
        $date = date('Y-m-d H:i:s');
        $pdostm = parent::getDb()->prepare($sql);

        $firstName = $User->getFirstName();
        $lastName = $User->getLastName();
        $email = $User->getEmail();
        $password = $User->getPassword();
        $phoneNumber = $User->getPhoneNumber();
        $dateOfBirth = $User->getDateOfBirth();
        $genderId = (int)$User->getGenderId();
        $roleId = (int)$User->getRoleId();
        $pdostm->bindParam(':first_name', $firstName);
        $pdostm->bindParam(':last_name', $lastName);
        $pdostm->bindParam(':email', $email);
        $pdostm->bindParam(':user_password', $password);
        $pdostm->bindParam(':phone_number', $phoneNumber);
        $pdostm->bindParam(':date_of_birth', $dateOfBirth);
        $pdostm->bindParam(':gender_id', $genderId);
        $pdostm->bindParam(':role_id', $roleId);
        $pdostm->bindParam(':created_datetime', $date);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;
    }

    public function CheckUserExistWithEmail($email)
    {
        $sql = "select * from users where LOWER(email) = :email";
        $pdostm = parent::getDb()->prepare($sql);
        $email = strtolower($email);
        $pdostm->bindParam(':email', $email);
        $pdostm->execute();
        $user = $pdostm->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function CheckValidUserCredentials($email, $password)
    {
        $sql = "select * from users where LOWER(email) = :email";
        $pdostm = parent::getDb()->prepare($sql);
        $email = strtolower($email);
        $pdostm->bindParam(':email', $email);
        $pdostm->execute();
        $user = $pdostm->fetch(PDO::FETCH_OBJ);
        $returnUser = null;
        if($user!=null){
            $isValid_password = password_verify($password,$user->user_password);
            if($isValid_password)
            {
                $returnUser = $user;
            }
        }
        var_dump($returnUser);
        return $returnUser;
    }

}