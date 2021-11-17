<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/admin/sendAssignmentReminder.css" /> 
    </head>
    <body style="background-color: black;">
        <?php include '../shared/adminNav.php';?>
        <div class="wrapper container-xxl">
            <div class="wrapper_sub container-xl">
                <h1>Assignments</h1>
                <form>
                    <div class="row">
                        <div class="col">
                            <h3 class="column_header left">Due Soon</h3>
                            <div class="column_content">
                                <h5>Today</h5>
                                <hr class="solid">
                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/due_soon.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left">
                                        <span>Sir Wang 1108</span>
                                        <br/>
                                        <small>Posted a new assignment: How to play Green Light!, Red Light!</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/due_soon.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left">
                                        <span>Madam Jung Ho-yeon</span>
                                        <br/>
                                        <small>Posted a new assignment: Identify which one is tempered glass!</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/due_soon.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left">
                                        <span>Madam Lee Yoo-Mi</span>
                                        <br/>
                                        <small>Posted a new assignment: OS Assignment Report Submission</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <h5>Tommorow</h5>
                                <hr class="solid">
                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/tmr.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left">
                                        <span>Madam Lee Yoo-Mi</span>
                                        <br/>
                                        <small>Posted a new assignment: OS Assignment Report Submission</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <h3 class="column_header right">Missing</h3>
                            <div class="column_content">
                                <h5>Yesterday</h5>
                                <hr class="solid">
                                <div class="content_row row">
                                    <div class="col">
                                        <img src="../pic/missing.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_right">
                                        <span>Object-oriented Programming</span>
                                        <br/>
                                        <small>Assignment 1</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <div class="content_row row">
                                    <div class="col">
                                        <img src="../pic/missing.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_right">
                                        <span>Software Engineering Fundamental</span>
                                        <br/>
                                        <small>Project Part 2</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <div class="content_row row">
                                    <div class="col">
                                        <img src="../pic/missing.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_right">
                                        <span>Operating System</span>
                                        <br/>
                                        <small>Tutorial 8</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>

                                <h5>2 days ago</h5>
                                <hr class="solid">
                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/missing.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left" style="background-color:#FFD4D4;">
                                        <span>Software Engineering Fundamental</span>
                                        <br/>
                                        <small>Tutorial 7</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>
                                <div class="content_row row">
                                    <div class="col col_1">
                                        <img src="../pic/missing.png" width="32px"/>
                                    </div>
                                    <div class="col col-6 col_2_left" style="background-color: #FFD4D4;">
                                        <span>Object-oriented Analysis and Design</span>
                                        <br/>
                                        <small>Assignment 2</small>
                                    </div>
                                    <div class="col ">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn_placement btn btn-primary" style="">Send</button>
                </form>
            </div>
        </div>
    </body>
</html>