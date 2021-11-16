<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/student/submitAssignment.css" /> 
        <!-- <link rel="stylesheet" href="../css/student/sendChatMessage.css" />  -->
    </head>
    <body style="background-color: black;">
        <?php include '../shared/test.php';?>
        <div class="wrapper container-xxl">
            <?php include '../shared/studentSidebar.php';?>
            <div class="row">
                <div class="col col-lg-2" style="margin-left: -3.4%;">
                    .
                </div>
                <div class="col">
                    <div class="wrapper_sub container-xl">
                        <div class="wrapper_sub_first" style="background-color: #FFD801; ">
                            <h5>TSE2101 - SOFTWARE ENG. FUND <br/>TC3V</h5>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="column_content">
                                        <div class="content_row row">
                                            <div class="tutorial_thumbnail"><img style="height: 49px; width: 49px;" src="../pic/checklist.png"></div>    
                                            <h3 class="column_header">Tutorial 7</h3>
                                        </div>
                                        <div class="content_row row">
                                            <div></div> 
                                            <small>Madam Lee Ji-eun </small> <span class="dot"></span><span class="date">30 Sept</span>
                                        </div>
                                        <div class="content_row row" style="margin-top: 30px;">
                                            <div></div> 
                                            <small style="font-weight: bold;">10 points</small>&emsp; &emsp;<span style="font-weight: bold;" class="date">Due  5 Oct , 20:30</span>
                                        </div>
                                        <hr class="content_hr"/>
                                        <p class="tutorial_p">Please complete this set of tutorial and turn it in before the given due date.</p>
                                    </div>
                                </div>
                                
                                <div class="col right"> 
                                    <form action="POST">
                                    <div class="column_content">
                                        <div class="content_row row">
                                            <h3 class="column_header" style="color: white;">Work Submission</h3> 
                                        </div>
                                        <div class="content_row row work">
                                            <!-- <div class="col"> -->
                                                <div class="col col-3">
                                                    <img src="../pic/work_1.png"/>
                                                </div>
                                                <div class="col" style="margin-left: -11%; padding: 17px;">
                                                    <span>Ahmad Ali Abu</span>
                                                    <br/>
                                                    <small style="margin: 0; font-size: 65% !important;">Google Docs</small>
                                                </div>
                                            <!-- </div> -->
                                        </div>                 
                                    </div>

                                    <div class="column_content">
                                        <div class="content_row row work">
                                            <!-- <div class="col"> -->
                                                <div class="col col-3">
                                                    <img src="../pic/work_1.png"/>
                                                </div>
                                                <div class="col" style="margin-left: -11%; padding: 17px;">
                                                    <span>Ahmad Ali Abu</span>
                                                    <br/>
                                                    <small style="margin: 0; font-size: 65% !important;">Google Docs</small>
                                                </div>
                                            <!-- </div> -->
                                        </div>                 
                                    </div>

                                    <div class="column_content button">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <!-- <button type="submit" class="btn_placement btn btn-primary" style="">Send</button> -->
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>