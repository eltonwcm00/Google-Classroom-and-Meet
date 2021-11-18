<?php 
    include("../auth_sessionAdmin.php");
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
               <form class="form" method="POST">
                   <h1>Create Teacher's Account</h1>
                   <div class="form_placement form-group ">
                       <label for="exampleInputEmail1">Teacher's Email address</label>
                       <input type="email" class="form-control" name="emailInput" id="exampleInputEmail1" aria-describedby="emailHelp">
                   </div>
                   <div class="form_placement form-group ">
                       <label for="exampleInputPassword1">Teacher's Password</label>
                       <input type="password" class="form-control" name="passwordInput" id="exampleInputPassword1">
                   </div>
                   <div class="echo">
                        .
                   </div>
                   <div class="btn_placement row">
                       <div class="col-md-auto">
                        <button type="submit" class="btn_placement btn btn-secondary" name="cancelbtn" style="background-color: #CCCCCC;">Cancel</button>
                       </div>
                       <div class="col col-lg-2">
                        <button type="submit" class="btn_placement btn btn-primary" name="createbtn" style="float: none !important; margin-top: 1em;">Create</button>
                       </div>
                   </div>
               </form>
            </div> 
        </div>
    </body>
    <?php 
        require('../db.php');  

        if (isset($_POST['cancelbtn'])) {
            header("Location: homepage.php");
        }
        elseif (isset($_POST['createbtn'])) {
            $varEmail = trim($_POST["emailInput"]);
            $varPass = trim($_POST["passwordInput"]);
           
            $queryCheck = mysqli_query($con, "SELECT Teacher_Email_Address, Teacher_Password FROM teacher where Teacher_Email_Address = '$varEmail' ");
            
            if(mysqli_num_rows($queryCheck) > 0){
                echo "<script> alert('Email is already existed'); </script>";
            } 
            else {
                $queryInsert = "INSERT INTO teacher(Teacher_Email_Address, Teacher_Password) VALUES ('$varEmail', '$varPass')";
                $result = mysqli_query($con, $queryInsert);

                if ($result) {
                    header('location:homepage.php');
                    exit();
                } else {
                    header('location:../error.php');
                    exit();
                }
            }
        }
    ?>
</html>