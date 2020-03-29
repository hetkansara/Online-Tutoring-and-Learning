<?php require_once "includes/header.php" ?>
<?php
$email = "";
$password = "";
$emailErr = "";
$passwordErr = "";

function validateInputs($email, $password)
{
    Global $emailErr, $passwordErr;
    $isEmailValid = false;
    $isPasswordValid = false;

    if ($email == "") {
        $emailErr = "Please enter email.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter valid email.";
    } else {
        $emailErr = "";
        $isEmailValid = true;
    }

    if ($password == "") {
        $passwordErr = "Please enter password";
    } else {
        $passwordErr = "";
        $isPasswordValid = true;
    }

    if ($isEmailValid && $isPasswordValid) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


}

?>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l6  offset-l3">
                    <div class="card login-card">
                        <div class="card-content">
                            <span class="card-title">Login</span>
                            <div class="row">
                                <form method="post" class="col s12">
                                    <div class="row margin-bottom-none">
                                        <div class="input-field col s12 m">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input name="email" value="<?= $email ?>" id="icon_prefix" type="text"
                                                   class="validate">
                                            <label for="icon_prefix">Email</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="icon_password" value="<?= $password ?>" type="password"
                                                   name="password" class="validate">
                                            <label for="icon_password">Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light" type="submit" name="login">
                                                Login
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                        <div class="input-field col s12">
                                            <a href="forgotPassword.php">Forgot Password?</a>
                                            <a href="register.php" class="right">New Member? Sign Up!</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    </div>
<?php require_once "includes/footer.php" ?>