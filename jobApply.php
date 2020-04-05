<?php
/* Developer : Priyanka Khadilkar
  * User can apply for the job and upload
  * the resume
  */
require_once "includes/header.php" ?>
<?php

require_once 'database/classes/JobPostContext.php';
require_once 'database/classes/models/JobPost.php';

//Variable to set the data
$id = "";
$jobTitle = "";
$jobDescription = "";

//Get details of job posting
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Get the job post detail according to id from the database
    $jobPostDb = new jobPostContext();
    $jobPost = $jobPostDb->Get($id);
    $jobTitle = $jobPost->title;
    $jobDescription = $jobPost->description;
}
?>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"><?= $jobTitle ?></span>
                            <div class="row">

                                <div class="row margin-bottom-none">
                                    <div class="input-field col s12">
                                        <?= $jobDescription ?>

                                    </div>
                                    <div class="input-field col s12">
                                        <a class="btn waves-effect waves-light"
                                           href="jobListing.php">Back to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once "includes/footer.php" ?>