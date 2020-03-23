<?php

class TutorContext extends Database
{
    public function __construct()
    {
    }

    public function getTutor($tutorID)
    {
      $sql = "select * from tutors t, users u where u.id = t.user_id AND t.id = :tutor_id";
      $pdostm = parent::getDb()->prepare($sql);
      $pdostm->bindParam(':tutor_id', $tutorID); 
      $pdostm->execute();
      $tutor = $pdostm->fetch(PDO::FETCH_ASSOC);
      // $mockQuestions[$index]['tutor']= $tutor;
        return $tutor;
    }

}
