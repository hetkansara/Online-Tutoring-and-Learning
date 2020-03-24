<?php

require_once '../database/classes/JobPostContext.php';
require_once '../database/classes/models/JobPost.php';

$TitleValidationMsg = "";
$DescriptionValidationMsg = "";
$id = "";
$jobTitle = "";
$jobDescription = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $jobPostDb = new jobPostContext();
    $jobPost = $jobPostDb->Get($id);
    $jobTitle = $jobPost->title;
    $jobDescription = $jobPost->description;
}

function checkValidation($jobTitle, $jobDescription)
{
    global $TitleValidationMsg, $DescriptionValidationMsg;
    $isValid = false;
    if ($jobTitle == "") {
        $TitleValidationMsg = "Please enter title.";
    }
    if ($jobDescription == "") {
        $DescriptionValidationMsg = "Please enter job description";
    }
    if ($jobTitle != null && $jobDescription != null && $jobDescription != "" && $jobTitle != "") {
        $isValid = true;
    }
    return $isValid;
}

//check if the form is submitted
if (isset($_POST['btnJobPostUpdate'])) {
    //get the values from form and assign to local variable
    $jobTitle = $_POST['title'];
    $jobDescription = $_POST['description'];

    //check if user entered the data

    if (checkValidation($jobTitle, $jobDescription) == true) {
        //Add Job Post if Job title and job description is entered.
        $jobPost = new JobPost($jobTitle, $jobDescription);

        //update the data
        $jobPostDb = new jobPostContext();
        $numRowsAffected = $jobPostDb->Update($jobPost, $id);
        if ($numRowsAffected) {
            header('Location: JobPosts.php');
        } else {
            echo "problem updating data";
        }
    }

}
?>
<?php require_once "../includes/adminHeader.php" ?>
<main>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Update Job Post</span>
                            <div class="row">
                                <form method="post" class="col s12">
                                    <div class="row margin-bottom-none">
                                        <div class="input-field col s12">
                                            <input id="title" value="<?= $jobTitle ?>" name="title" type="text"
                                                   class="validate">
                                            <label class="active" for="title">Title</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="description" name="description"
                                                      class="validate materialize-textarea"
                                                      data-length="120"><?= $jobDescription ?></textarea>
                                            <label class="active" for="description">Description</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light" type="submit"
                                                    name="btnJobPostUpdate">Submit
                                            </button>
                                            <a class="btn waves-effect waves-light"
                                               href="jobPosts.php">Back to List
                                            </a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php require_once "../includes/adminFooter.php" ?>
