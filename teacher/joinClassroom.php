<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/joinClassroom.css" /> 
    </head>
    <body style="background-color: black;">
    <div style=""><?php include '../shared/teacherNav.php';?>
        <div class="wrapper container-xxl">
        <!-- <?php include '../shared/teacherSidebar.php';?> -->
            <div class="row">
                <!-- <div class="col col-lg-2" style="margin-left: -3%;">
                    .
                </div> -->
                <div class="col">
                    <div class="wrapper_sub container-xl">
                        <div class="wrapper_sub_first" style="background-color: #FFD801;">
                            <h5>TSE2101 - SOFTWARE ENG. FUND <br/>TC3V</h5>
                        </div>
                        <div class="wrapper_sub_second wrapper_sub_second_pos">
                            <form method="POST">
                                <h3>Join Classroom</h3>
                                <br>
                                <label1 for="">Class Code :</label1>
                                <br><br>
                                <input type="text" id="code" name="code" placeholder="enter class code here...">
                                <br><br>
                                <label2 for="">*</label2>
                                <label3 for="">Please ask your lecturer for the class code, then enter here.</label3>
                                <br><br><br><br><br><br><br><br><br>
                                <p align="right" style="margin-right: 3%">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary" style="padding: 6px 21px;">Join</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
