<?php
  header('Content-Type: application/json'); 
  require('../../connect.php');

  if(isset($_GET['mockTestQuestions'])) {
    require_once "../../classes/MockTestQuestionContext.php";
    $mockTestQuestions = new MockTestQuestionContext();
    $mockQuestions = $mockTestQuestions->getMockTestQuestions();
    echo json_encode($mockQuestions);
  }

  if(isset($_GET['subjects'])) {
    require_once "../../classes/SubjectContext.php";
    $subject = new SubjectContext();
    $subjects = $subject->getAllSubjects();
    echo json_encode($subjects);
  }

  if(isset($_GET['tutors'])) {
    require_once "../../classes/TutorContext.php";
    $tutor = new TutorContext();
    $tutors = $tutor->getAllTutors();
    echo json_encode($tutors);
  }
?>