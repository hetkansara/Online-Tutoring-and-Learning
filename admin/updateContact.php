<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Update Contact Information</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                            <div>
                                                <input id="add-contact-title" type="text" class="add-contact-title" placeholder="Contact Heading">
                                            </div>
                                            <form class="col s12">
                                                <div class="input-field col s12 add-contact-form">
                                                    <textarea id="add-contact-description" class="materialize-textarea"></textarea>
                                                    <label for="add-contact-description">Description</label>
                                                </div>
                                            </form>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-email-title" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-email-title">Email Title</label>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                                <span class="helper-text" data-error="wrong" data-success="right">example@xyz.com</span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-phone-title" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-phone-title">Phone Title</label>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-phone" type="tel" class="validate">
                                                <label for="add-contact-phone">Phone</label>
                                                <span class="helper-text" data-error="wrong" data-success="right">(111)-111-1111</span>
                                            </div>
                                            <div class="input-field col s12 add-contact-form">
                                                <input id="add-contact-address-title" type="text" class="validate  add-contact-element-title">
                                                <label for="add-contact-address-title">Address Title</label>
                                            </div>
                                            <div class="row">
                                                <form class="col s12">
                                                    <div class="row">
                                                        <div class="input-field col s12 add-contact-form add-contact-address">
                                                            <textarea id="add-contact-address" class="materialize-textarea "></textarea>
                                                            <label for="add-contact-address">Address</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card login-card">
                                                <div class="card-content">
                                                    <span class="card-title">Change the form fields</span>
                                                    <div class="row">
                                                        <form class="col s12 contact-form">
                                                            <div class="row">
                                                                <div class="input-field col s12 m12 l6">
                                                                    <input id="icon_prefix" type="text" class="validate">
                                                                    <label for="icon_prefix">Name Title</label>
                                                                </div>
                                                                <div class="input-field col s12 m12 l6">
                                                                    <input id="icon_telephone" type="tel" class="validate">
                                                                    <label for="icon_telephone">Telephone Title</label>
                                                                </div>
                                                                <div class="input-field col s12 m12 l6">
                                                                    <input id="icon_email" type="email" class="validate">
                                                                    <label for="icon_email">Email Title</label>
                                                                </div>
                                                                <div class="input-field col s12 m12 l6">
                                                                    <input id="icon_message" type="text" class="validate">
                                                                    <label for="icon_message">Subject Title</label>
                                                                </div>
                                                                <div class="input-field col s12 m12 l6 contact-message">
                                                                    <input id="icon_message" type="text" class="validate">
                                                                    <label for="icon_message">Message Title</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-contact-flex">
                                                <div>
                                                    <button class="btn waves-effect waves-light contact-submit" type="submit" name="action">Update
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="btn waves-effect waves-light contact-submit add-contact-btn" type="submit" name="action">Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once "../includes/adminFooter.php" ?>