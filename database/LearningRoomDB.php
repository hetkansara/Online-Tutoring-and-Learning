<?php

// use \PDO;
require_once "models/LearningRoom.php";
require_once "connect.php";



class LearningRoomDB extends Database
{
    public function __construct()
    {
    }

    public function ListAll()
    {
        $sql = "SELECT * FROM learning_rooms";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->execute();

        $learningrooms = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $learningrooms;

    }

    public function Add($LearningRoom)
    {
        $sql = "INSERT INTO learning_rooms (room_number) VALUES (:room_number)";
        $pdostm = parent::getDb()->prepare($sql);
        $room_number = $LearningRoom->getRoomNumber();
        $pdostm->bindParam(':room_number', $room_number);        

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;

    }

    public function Update($JobPost,$id)
    {
        $sql = "Update job_post set title = :jobtitle, description = :jobdescription where id= :id";
        $pdostm = parent::getDb()->prepare($sql);
        $JobTitle = $JobPost->getJobTitle();
        $JobDesc = $JobPost->getJobTitle();
        $pdostm->bindParam(':jobtitle', $JobTitle);
        $pdostm->bindParam(':jobdescription', $JobDesc);
        $pdostm->bindParam(':id', $id);

        $numRowsAffected = $pdostm->execute();
        return $numRowsAffected;

    }

    public function Delete($id)
    {
        $sql = "DELETE FROM job_post WHERE id = :id";

        $pst = parent::getDb()->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

    public function Get($id)
    {
        $sql = "select * from job_post where id = :id";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->bindParam(':id', $id);
        $pdostm->execute();
        $jobOpening = $pdostm->fetch(PDO::FETCH_OBJ);
        return $jobOpening;

    }

}
