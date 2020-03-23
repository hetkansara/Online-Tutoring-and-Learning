<?php
  header('Content-Type: application/json'); 
  require('../../connect.php');

  if(isset($_GET['mockTestQuestions'])) {
    require_once "../../classes/MockTestQuestionContext.php";
    $mockTestQuestions = new MockTestQuestionContext();
    $mockQuestions = $mockTestQuestions->getMockTestQuestions();
    echo json_encode($mockQuestions);
  }
?>