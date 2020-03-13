<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Add Learning Room</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                          
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">room</i>
                                                <input id="roomNo" type="text" class="validate">
                                                <label for="roomNo">Room No</label>
                                            </div>
                                       
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="action">Add Room
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