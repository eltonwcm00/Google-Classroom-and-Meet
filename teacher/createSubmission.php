<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/createSubmission.css" /> 
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
                                <form method="POST">
                                    <h3>Classwork Submission</h3>
                                        <div class="row">
                                            <div class="col">
                                                <label1 for="">Title</label1>
                                                <br>
                                                <input type="text" id="title" name="title">
                                                <br><br>
                                                <label1 for="">Instruction</label1>
                                                <br>
                                                <input type="text" id="instruction" name="instruction">
                                                <br><br>
                                                <label1 for="">Topic</label1>
                                                <br>
                                                <input type="text" id="topic" name="topic">
                                                <br><br>
                                                <label1 for="">Rubric</label1>
                                                <br>
                                                <input type="text" id="rubric" name="rubric">
                                            </div>
                                            <div class="col">
                                                <label1 for="">Point</label1>
                                                <br>
                                                <input type="text" id="point" name="point">
                                                <br><br>
                                                <label1 for="">Due</label1>                
                                                <br>
                                                <input type="date" id="due_date" name="due_date"> 
                                            </div>
                                        </div>

                                        <br><br><br><br>
                                        <p align="right" style="margin-right: 3%">
                                            <button type="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="submit" class="btn btn-primary" style="padding: 6px 21px;">Post</button>
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
