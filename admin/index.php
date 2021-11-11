<!-- -->

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/admin/login.css" /> 
    </head>
    <body style="">
        <?php include '../shared/loginNav.php';?>
        <div class="container-xxl">
            <div class="row">
                <div class="col-6">
                    <div class="hi-title">
                        <h2>Hello!</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="admin-triangle">
                        .
                    </div>
                </div>
            </div>
            <div class="sub_container container-xl">
                <form method="POST">
                    <div class="row_form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn_placement">login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>