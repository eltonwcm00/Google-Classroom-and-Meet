<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/index.css" /> 
    </head>
    <body style="">
        <?php include './shared/loginNav.php';?>
        <div class="container-xxl">
            <div class="row">
                <div class="col-6">
                    <div class="hi-title">
                        <h2>Welcome!</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="admin-triangle">
                        .
                    </div>
                </div>
            </div>
            <form method="POST">
                <div class="row row_content">
                    <div class="col col-lg-6">
                        <h3>Log In As ?</h3>
                        <div class="row_button">
                            <button type="submit" class="btn_placement btn btn-primary">New Teacher</button>
                            <button type="submit" class="btn_placement btn btn-primary">New Student</button>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="row_form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>