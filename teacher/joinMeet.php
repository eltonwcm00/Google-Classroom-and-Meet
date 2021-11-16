<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/joinMeet.css" /> 
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
                    <form method="POST">
                    <div class="wrapper_sub container-xl">
                        
                            <div class="wrapper_sub_first" style="background-color: #FFD801;">
                                <h5>TSE2101 - SOFTWARE ENG. FUND <br/>TC3V</h5>
                            </div>
                            <div class="wrapper_sub_second wrapper_sub_second_pos">
                                <label1 for="">Meet Link </label1>
                                <br><br>
                                <div class="meet_link_wrap">
                                    <a href="meet.google/abc-def-ghi">https://meet.google.com/znj-uwwb-ztu</a><img src="../pic/copynpaste.png" />
                                </div>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <p align="right" style="margin-top: 6%; margin-right: 3%">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary" style="padding: 6px 21px;">Join</button>
                                </p>
                            </div>  
                    </div>
                    </form>  
                </div>
            </div>
           
            </div>
        </div>
    </body>
</html>
