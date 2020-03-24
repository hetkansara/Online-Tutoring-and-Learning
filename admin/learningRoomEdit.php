<?php 
    if(!$_GET['id']) {
        header("Location:learningRoomList.php");
    }
    require_once "../includes/adminHeader.php";
require_once "../database/LearningRoomDb.php";
require_once "../database/models/LearningRoom.php";

$roomExists="";
    $learningRoomDb = new LearningRoomDb();
    foreach($learningRoomDb->ListAll() as $value){  //for getting room number from id
        if($value->id == $_GET['id']){
            $room_number = $value->room_number;
        }
    }
        
    if(isset($_POST['update_room'])) {
        if($_POST['updateRoomNo'] == "" || $_POST['updateRoomNo'] == null){
            echo $roomExists = "Please enter a specific Room No";
        }else{
            $learningRoom = new LearningRoom($_POST['updateRoomNo']);  //passing data using get set
            $learningRoomDb = new LearningRoomDb();     //initializing CRUD operation
            $getroom = $learningRoomDb->Get($_POST['updateRoomNo']);        //passing Create->AddFunctn (getSetclass)

            if(is_bool($getroom)){
                $learningRoom->setRoomNumber($_POST['updateRoomNo']);
                echo $roomExists = "Room Updated id";
                $learningRoomDb->Update($learningRoom,$_GET['id']);        //passing object and id
                // header("Location:LearningRoomList.php");
            }else{
                echo $roomExists = "Room already exists";
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
                                <span class="card-title">Edit Learning Room</span>
                                <div class="row">
                                    <form class="col s12" action="" method="post">
                                        <div class="row margin-bottom-none">
                                          
                                            <div class="input-field col s12">
                                                <input id="roomNo" name="updateRoomNo" type="text" value="<?= (isset($_GET['id']) ? $room_number : $_POST['updateRoomNo']);?>" class="validate">
                                                <label for="roomNo">Room No</label>
                                                <span><?=$roomExists; ?></span>
                                            </div>  
											
                                            <div class="input-field col s12">
                                                <button type="submit" class="btn waves-effect waves-light" type="submit"
                                                        name="update_room">Update Room
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