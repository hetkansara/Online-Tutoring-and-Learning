<?php require_once "includes/header.php"?>
    <div>
        <div>
            <h1 class="contact-h1">Contact us</h1>
            <p class="contact-description">We are here to answer any questions you may have about our website. Reach out to us and we'll respond as soon as we can.</p>
        </div>
        <fieldset>
            <p class="form-title">Fill this form:</p>
            <div class="row">
                <form class="col s12 contact-form">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_email" type="email" class="validate">
                            <label for="icon_email">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">subject</i>
                            <input id="icon_message" type="text" class="validate">
                            <label for="icon_message">Subject</label>
                        </div>
                        <div class="input-field col s6 contact-message">
                        <i class="material-icons prefix">message</i>
                            <input id="icon_message" type="text" class="validate">
                            <label for="icon_message">Message</label>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light contact-submit" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
<?php require_once "includes/footer.php"?>