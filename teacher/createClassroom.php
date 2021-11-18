<?php 
    include("../auth_sessionTeacher.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/createClassroom.css" /> 
    </head>
    <body style="background-color: black;">
    <div style=""><?php include '../shared/teacherNav.php';?>
        <div class="wrapper container-xxl">
        <?php include '../shared/teacherSidebar.php';?>
            <div class="row">
                <div class="col col-lg-2" style="margin-left: -3%;">
                    .
                </div>
                <div class="col">
                    <div class="wrapper_sub container-xl">
                        <div class="wrapper_sub_first" style="background-color: #FFD801;">
                            <h5>TSE2101 - SOFTWARE ENG. FUND <br/>TC3V</h5>
                        </div>
                        <div class="wrapper_sub_second wrapper_sub_second_pos">
                            <div>
                                <form method="POST">
                                    <h3>Create Classroom</h3>
                                    <label1 for="">Class Name (</label1>
                                    <label2 for="">*</label2>
                                    <label3 for="">required</label3>
                                    <label1 for="">)</label1>
                                    <br>
                                    <input type="text" id="code" name="code">
                                    <br><br>
                                    <label1 for="">Section</label1>
                                    <br>
                                    <input type="text" id="section" name="section">
                                    <br><br>
                                    <label1 for="">Subject</label1>
                                    <br>
                                    <input type="text" id="subject" name="subject">
                                    <br><br>
                                    <label1 for="">Room</label1>
                                    <br>
                                    <input type="text" id="room" name="room">
                                    <br><br><br><br>
                                    <p align="right" style="margin-right: 3%">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary" style="padding: 6px 21px;">Create</button>
                                    </p>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
    </body>
</html>
