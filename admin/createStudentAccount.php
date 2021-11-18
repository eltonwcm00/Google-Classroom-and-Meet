<?php 
    include("../auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/admin/createAccount.css" /> 
    </head>
    <body style="background-color: black;">
        <?php include '../shared/adminNav.php';?>
        <div class="wrapper container-xxl">
            <div class="wrapper_sub container-xl">
               <form>
                   <h1>Create Student's Account</h1>
                   <div class="form_placement form-group ">
                       <label for="exampleInputEmail1">Student's Email address</label>
                       <input type="email" class="form-control" name="emailInput" id="exampleInputEmail1" aria-describedby="emailHelp">
                   </div>
                   <div class="form_placement form-group ">
                       <label for="exampleInputPassword1">Student's Password</label>
                       <input type="password" class="form-control" name="passwordInput" id="exampleInputPassword1">
                   </div>
                   <div class="btn_placement row">
                       <div class="col-md-auto">
                        <button type="submit" class="btn_placement btn btn-secondary" style="background-color: #CCCCCC;">Cancel</button>
                       </div>
                       <div class="col col-lg-2">
                        <button type="submit" class="btn_placement btn btn-primary" style="float: none !important; margin-top: 1em;">Create</button>
                       </div>
                   </div>
               </form>
            </div> 
        </div>
    </body>
</html>