<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/student/submitAssignment.css" /> 
        <link rel="stylesheet" href="../css/student/sendChatMessage.css" /> 
    </head>
    <body style="background-color: black;">
    <div style=""><?php include '../shared/studentNav.php';?>
        <div class="wrapper container-xxl">
            <?php include '../shared/studentSidebar.php';?>
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
                            <!-- <img id="speaker" src="../pic/speaker.png" />  -->
                            <span id="speaker_title" style="font-size: 30px;">Chat Box</span>
                            <br /> 
                            <div class="row row_btwn">
                                <div class="col">
                                    <div class="annoucement_details">
                                        <div class="row">
                                            <div class="col-4 col-md-1">
                                                <img style="border-radius: 50%; height: 49px; width: 49px;" src="../pic/chat_a.jpg" /> 
                                            </div>
                                            <div class="col">
                                                <span id="speaker_title">Student 1</span>
                                            </div>
                                        </div>
                                        <div class="row row_pos">
                                            <div class="col-4 col-md-1">
                                            </div>
                                            <div class="col">
                                                <div class="conversation">.</div>
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col">   
                                </div>
                            </div>

                            <div class="row row_btwn">
                                <div class="col">
                                    <div class="annoucement_details">
                                        <div class="row">
                                            <div class="col-4 col-md-1">
                                                <img style="border-radius: 50%; height: 49px; width: 49px;" src="../pic/chat_b.jpg" /> 
                                            </div>
                                            <div class="col">
                                                <span id="speaker_title">Student 2</span>
                                            </div>
                                        </div>
                                        <div class="row row_pos">
                                            <div class="col-4 col-md-1">
                                            </div>
                                            <div class="col">   
                                                <div class="conversation">.</div>
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col">   
                                </div>
                            </div>
                            <form  class="form_inline" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type something here..">
                                </div>
                                <button type="submit" class="btn btn-primary ">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </body>
</html>
