<?php require_once "../includes/adminHeader.php" ?>
<?php
if(isset($_POST['roomAdd'])) {
    $roomNo = $_POST['roomNo'];
    
    $user = 'root';
    $password = '';
    $dbname = 'phpclass';
    $dsn = 'mysql:host=localhost;dbname=' . $dbname;

    $dbcon = new PDO($dsn, $user, $password);

    $sql = "INSERT INTO students (name, email, program) 
              VALUES (:name, :email, :program) ";
    $pst = $dbcon->prepare($sql);

    $pst->bindParam(':name', $name);
    $pst->bindParam(':email', $email);
    $pst->bindParam(':program', $program);

    $count = $pst->execute();
    if($count){
        header("Location: listStudents.php");
    } else {
        echo "problem adding a student";
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
                                <span class="card-title">Add Learning Room</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row margin-bottom-none">
                                          
                                            <div class="input-field col s12">
                                                <input id="roomNo" name="roomNo" type="text" class="validate">
                                                <label for="roomNo">Room No</label>
                                            </div>
                                            <span id="roomError"></span>
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" name="roomAdd" type="submit"
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