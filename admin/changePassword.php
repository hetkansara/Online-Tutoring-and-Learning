<?php require_once "../includes/adminHeader.php" ?>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l8  offset-l2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Change Password</span>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row margin-bottom-none">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Old Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="password" type="password" class="validate">
                                            <label for="password">New Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="confirmPassword" type="password" class="validate">
                                            <label for="confirmPassword">Confirm New Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            </button>
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Clear
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
    <br><br>
    </div>
<?php require_once "../includes/adminFooter.php" ?>