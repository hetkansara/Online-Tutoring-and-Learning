<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Add Learning Material</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="contact" type="text" class="validate">
                                                <label for="contact">Contact</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">date_range</i>
                                                <input id="dateOfBirth" type="text" class="validate datepicker">
                                                <label for="dateOfBirth">Date of Birth</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="action">Update
                                                </button>
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="action">Clear
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