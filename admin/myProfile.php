<?php require_once "../includes/adminHeader.php" ?>
<?php
require_once '../database/classes/UserContext.php';
require_once '../database/classes/models/User.php';

$fNameErr = "";
$lNameErr = "";
$emailErr = "";
$phoneNumberErr = "";
$dateOfBirthErr = "";
$firstname = "";
$lastname = "";
$email = "";
$phoneNumber = "";
$dateOfBirth = "";
$userExistMsg = "";

//get session data
$userId = $sessionData->userId;

$userContext = new UserContext();
$userData = $userContext->Get($userId);
if($userData !=null){
    $firstname = $userData->first_name;
    $lastname = $userData->last_name;
    $email = $userData ->email;
    $phoneNumber = $userData->phone_number;
    $date = date_create($userData->date_of_birth);
    $dob = date_format($date, "M d, Y");
    $dateOfBirth = $dob;
}


//Function to validate all inputs
function validateInputs($firstname, $lastname, $email, $phoneNumber, $dateOfBirth)
{
    Global $fNameErr, $lNameErr, $emailErr, $phoneNumberErr, $dateOfBirthErr;
    $isFirstNameValid = false;
    $isLastNameValid = false;
    $isEmailValid = false;
    $isPhoneNumberValid = false;
    $isDateOfBirthValid = false;
    $phoneNumberPattern = "/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/";

    if ($firstname == "") {
        $fNameErr = "Please enter first name.";
    } else {
        $fNameErr = "";
        $isFirstNameValid = true;
    }

    if ($lastname == "") {
        $lNameErr = "Please enter last name.";
    } else {
        $lNameErr = "";
        $isLastNameValid = true;
    }

    if ($email == "") {
        $emailErr = "Please enter email.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter valid email.";
    } else {
        $emailErr = "";
        $isEmailValid = true;
    }


    if ($phoneNumber == "") {
        $phoneNumberErr = "Please enter your contact number.";
    } else if (!preg_match($phoneNumberPattern, $phoneNumber)) {
        $phoneNumberErr = "Please enter valid contact number.";
    } else {
        $phoneNumberErr = "";
        $isPhoneNumberValid = true;
    }

    if ($dateOfBirth == "") {
        $dateOfBirthErr = "Please select date of birth";
    } else {
        $dateOfBirthErr = "";
        $isDateOfBirthValid = true;
    }


    if ($isFirstNameValid == true && $isLastNameValid == true && $isEmailValid == true
        && $isPhoneNumberValid == true && $isDateOfBirthValid == true) {
        return true;
    } else {
        return false;
    }


}

//When user clicks "Update" button
if (isset($_POST["updateProfile"])) {
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $dateOfBirth = $_POST["dateOfBirth"];


    $isFormValid = validateInputs($firstname, $lastname, $email, $phoneNumber, $dateOfBirth);

    //If form is valid then allow user to register
    if ($isFormValid == true) {
        $userContext = new UserContext();
        $userExist = $userContext->CheckUserExistWithEmailExceptSelf($email, $userId);
        if ($userExist == null) {
            $user = new User($firstname, $lastname, $email, "", $phoneNumber, $dateOfBirth, "", "");
            $userContext = new UserContext();
            $userUpdated = $userContext->UpdateProfile($user, $userId);
        } else {
            $userExistMsg = "User is already exists with same email id.Please select another email id.";
        }
    }
}

?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">My Profile</span>
                                <div class="row">
                                    <span class="red-text"><?= $userExistMsg ?></span>
                                </div>
                                <div class="row">
                                    <form method="post" class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div class="input-field col s12 m12 l6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input name="firstName" value="<?= $firstname ?>" id="firstname"
                                                       type="text" class="validate">
                                                <label for="firstname">Firstname</label>
                                                <span class="helper-text red-text"><?= $fNameErr ?></span>
                                            </div>
                                            <div class="input-field col s12 m12 l6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input name="lastName" value="<?= $lastname ?>" id="lastname"
                                                       type="text" class="validate">
                                                <label for="lastname">Lastname</label>
                                                <span class="helper-text red-text"><?= $lNameErr ?></span>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">mail</i>
                                                <input name="email" value="<?= $email ?>" id="email" type="email"
                                                       class="validate">
                                                <label for="email">Email</label>
                                                <span class="helper-text red-text"><?= $emailErr ?></span>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">phone</i>
                                                <input name="phoneNumber" value="<?= $phoneNumber ?>" id="contact"
                                                       type="text" class="validate">
                                                <label for="contact">Contact</label>
                                                <span class="helper-text red-text"><?= $phoneNumberErr ?></span>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">date_range</i>
                                                <input name="dateOfBirth" value="<?= $dateOfBirth ?>" id="dateOfBirth"
                                                       type="text"
                                                       class="validate datepicker">
                                                <label for="dateOfBirth">Date of Birth</label>
                                                <span class="helper-text red-text"><?= $dateOfBirthErr ?></span>
                                            </div>
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="updateProfile">Update
                                                </button>
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