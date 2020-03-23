<?php

include_once "SubjectContext.php";
include_once "TutorContext.php";

class MockTestQuestionContext extends Database
{
    public function __construct()
    {
    }

    public function getMockTestQuestions()
    {
        $sql = "select * from mock_questions";
        $pdostm = parent::getDb()->prepare($sql);
        $pdostm->execute();
        $mockQuestions = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        $tutor = new TutorContext();
        $subject = new SubjectContext();
        for ($index=0; $index < count($mockQuestions); $index++)
        {
            $mockQuestions[$index]['tutor'] = $tutor->getTutor($mockQuestions[$index]['tutor_id']);
            $mockQuestions[$index]['subject'] = $subject->getSubject($mockQuestions[$index]['subject_id']);
            $mockQuestions[$index]['options'] = self::getMockTestQuestionOptions($mockQuestions[$index]['id']);
        }
        return $mockQuestions;
    }

    public function getMockTestQuestionOptions($questionID) {
        $sql = "select * from mock_questions_options where mock_question_id = :mock_question_id";
        $pdostm =  parent::getDb()->prepare($sql);
        $pdostm->bindParam(':mock_question_id', $questionID); 
        $pdostm->execute();
        $options = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        return $options;
    }

}
