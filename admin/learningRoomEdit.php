<?php require_once "../includes/adminHeader.php" ?>
    <main>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l8  offset-l2">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Edit Learning Room</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                          
                                            <div class="input-field col s12">
                                                <input id="roomNo" type="text" value="R01" disabled="true" class="validate">
                                                <label for="roomNo">Room No</label>
                                            </div> 
											<div class="input-field col s12">
                                                <input id="roomCapacity" type="number" value="2" class="validate">
                                                <label for="roomCapacity">Capacity</label>
                                            </div>
                                       
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit"
                                                        name="action">Update Room
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