<?php 
    include("../auth_sessionTeacher.php");
    require('../db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--THIS IS BOOTSTRAP CSS PART START-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/viewClassroomMain.css" /> 
    </head>
    <body>
        <?php include '../shared/teacherNav.php';?>
        <div class="container-xxl">
            <div class="row">
                <div class="col-6">
                    <div class="classroom-wrapper">
                        <div class="row">
                            <div class="classroom">
                                <a href="viewAnnoucement.php" class="clickable-card">
                                    <div class="col">
                                    <div class="card" style="width: 18rem; border-radius: 15px;">
                                            <div class="card-header card_head">
                                                TSE2101 - SOFTWARE ENG. FUND<br/>  
                                                <small>
                                                    TC3V<br/>
                                                </small>
                                                <small>
                                                    <span>Room : JSN0022</span><br/>
                                                </small>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text card_text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>     
                                    </div>
                                </a>
                                <a href="viewAnnoucement.php" class="clickable-card">
                                    <div class="col">
                                        <div class="card" style="width: 18rem; border-radius: 15px;">
                                            <div class="card-header card_head">
                                                TSE2101 - SOFTWARE ENG. FUND<br/>  
                                                <small>
                                                    TC3V<br/>
                                                </small>
                                                <small>
                                                    <span>Room : JSN0023</span><br/>
                                                </small>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text card_text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php     
                            $email = $_SESSION['Teacher_Email_Address'];
                            
                            $querySelect = mysqli_query($con, "SELECT * FROM classroom where Teacher_Email_Address = '$email'");
                            $numrow = mysqli_num_rows($querySelect);
                        ?>
                        <div class="row" style="margin-top: 30px;">
                            <div class="classroom">
                                <!-- Dynamic data pulling from backend -->
                                <?php
                                    if($numrow != 0) {

                                        while($row = mysqli_fetch_assoc($querySelect)) {
                                                
                                            $db_className = $row['Class_Name'];
                                            $db_classSection = $row['Class_Section'];
                                            $db_classSubject = $row['Class_Subject'];
                                            $db_classRoom = $row['Class_Room'];
                                ?>
                                        <a href="viewAnnoucement.php" class="clickable-card">
                                            <div class="col">
                                                <div class="card" style="width: 18rem; border-radius: 15px;">
                                                    <div class="card-header card_head">
                                                        <?php echo $db_className ?><br/>  
                                                        <small>
                                                            <?php echo $db_classSection ?><br/>
                                                        </small>
                                                        <small>
                                                            <span>Room : </span><?php echo $db_classRoom ?><br/>
                                                        </small>
                                                        <span class="dot"></span>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text card_text"><?php echo $db_classSubject ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                <?php 
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="teacher-triangle">
                        .
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bubble">
            <img src="../pic/bottom_bubble.png" />
        </div>
    </body>
</html> 
