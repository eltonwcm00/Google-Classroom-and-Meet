<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/postAnnoucement.css" />
        <style>
            .dropdown {
                margin-top: 0 !important;
            }
        </style> 
    </head>
    <body style="background-color: black;">
    <div style=""><?php include '../shared/test.php';?>
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
                            <form method="POST">
                                <h3>Announcement</h3>
                                <textarea name="Announcement" id="Announcement" cols="147" rows="8" placeholder="Type something here"></textarea>
                                <br>
                                <p align="right" style="margin-top: 6%; margin-right: 3%">
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
