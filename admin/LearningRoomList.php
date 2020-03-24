<?php
require_once "../includes/adminHeader.php" ?>
<?php
    require_once "../database/LearningRoomDb.php";
    require_once "../database/classes/models/LearningRoom.php";

    if(isset($_GET['action'])){
		if($_GET['action']=="delete" && isset($_GET['id'])){
            $id = $_GET['id'];
		}
	}
        $learningRoomDb = new LearningRoomDb();     //initializing CRUD operation
           
?>
    <main class="adminmain admin-mock-tests">
        <div class="section no-pad-bot" id="index-banner">
            <div class="row">
                <div class="col s10 m6 l12">
                    <h5 class="breadcrumbs-title">Learning Rooms</h5>
                    
                </div>
                <div class="row">
                    <form>
                        <div class="input-field col s12 m12 l4">
                            <input id="first_name" type="text" class="validate search-box">
                            <label for="first_name" class="serach-label">Search learning Rooms...</label>
                        </div>
                        <div class="input-field col s12 m12 l2">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Search
                                <i class="material-icons right">search</i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="direction-top">
                                    <a title="Add Learning Material" href="learningRoomAdd.php" class="btn-floating btn-large green floatright">
                                        <i class="large material-icons">add</i>
                                    </a>
                                </div>
                                <table class="responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Room No</th>
                                        <th>Created On</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach($learningRoomDb->ListAll() as $value){
                                        echo "
                                    <tr>
                                        <td>$value->room_number</td>
                                        <td>$value->created_datetime</td>
                                        <td>
                                            <a href='LearningRoomEdit.php?id=$value->id' name='edit_room'><i class='material-icons blue-text'>create</i></a>
                                            <a data-target='demo-modal' class='modal-trigger cursor-pointer' href='#demo-modal'
                                           data-nom='$value->id'>
                                                <i class='material-icons red-text'>delete</i>
                                            </a>
                                        </td>
                                    </tr>";
                                    ?>
                                    <div id='demo-modal' class='modal modal-learning-popup'>
                                        <div class='modal-content'>
                                        <h4>Are you sure?</h4>
                                        <p>Do you really want to delete this room?</p>
                                        </div>
                                        <div class='modal-footer-LearningRoom'>
                                            <!-- <a href='LearningRoomList?action=delete&id=<?=$value->id?>' name="nom" class=" ">Delete</a> -->
                                            <span class="delete-btn-learningRoom waves-effect waves-light btn-small"></span>
                                            <a href="#!" class="modal-action modal-close waves-effect waves-white btn-flat">Close</a>
                                            <input type="text" name="nom">
                                        </div>
                                    </div>
                                <?php }  ?>
                                     
                                     
                                    </tbody>
                                </table>
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
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
         //}
 require_once "../includes/adminFooter.php" ?>