<?php

require_once '../database/classes/JobApplicationContext.php';

$messageErr = "";


function checkValidation($emailMessage)
{
    global $messageErr;
    $isValid = false;

    if ($emailMessage == "") {
        $messageErr = "Please enter message to send.";
    } else {
        $isValid = true;
    }
    return $isValid;
}

//check if the form is submitted
if (isset($_POST['sendEmail'])) {
    //get the values from form and assign to local variable
    $emailMessage = $_POST['$message'];


    //check if user entered the data
    if (checkValidation($emailMessage) == true) {


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
                                <span class="card-title">Send Email to Job Applicant</span>
                                <div class="row">
                                    <form method="post" class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div class="input-field col s12">
                                                Name :
                                            </div>
                                            <div class="input-field col s12">
                                                Job Post :
                                            </div>
                                            <div class="input-field col s12">
                                                Phone Number :
                                            </div>
                                            <div class="input-field col s12">
                                                Resume :
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="message" name="message"
                                                          class="validate materialize-textarea"
                                                          data-length="120"></textarea>
                                                <label for="message">Email Message</label>
                                                <span class="helper-text red-text"><?= $messageErr ?></span>
                                            </div>
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="sendEmail">Send Email
                                                </button>
                                                <a class="btn waves-effect waves-light"
                                                   href="jobApplications.php">Back to List
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