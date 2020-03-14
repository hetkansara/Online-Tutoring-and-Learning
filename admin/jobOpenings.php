<?php require_once "../includes/adminHeader.php" ?>
    <main class="adminmain">
        <div id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">Job Openings</h5>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m12 l4">
                                <input id="first_name" type="text" class="validate search-box">
                                <label for="first_name" class="serach-label">Search Job Opening...</label>
                            </div>
                            <div class="input-field col s12 m12 l2">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Search
                                    <i class="material-icons right">search</i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="direction-top">
                                <a title="Add Leaning Material" href="jobOpeningAdd.php"
                                   class="btn-floating btn-large green marginleft14">
                                    <i class="large material-icons">add</i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title">Maths Tutor</span>
                                        <p class="small-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum....</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="small-text">View</a>
                                        <a href="#" class="small-text">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title">Physics Tutor</span>
                                        <p class="small-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum....</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="small-text">View</a>
                                        <a href="#" class="small-text">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title">English Tutor</span>
                                        <p class="small-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum....</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="small-text">View</a>
                                        <a href="#" class="small-text">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title">Chemistry Tutor</span>
                                        <p class="small-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum....</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="small-text">View</a>
                                        <a href="#" class="small-text">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a>
                    </li>
                    <li class="red"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i
                                class="material-icons">chevron_right</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
<?php require_once "../includes/adminFooter.php" ?>