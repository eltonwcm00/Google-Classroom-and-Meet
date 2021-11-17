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
                            <input type="email" class="form-control" name="emailInput" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password:</label>
                            <input type="password" class="form-control" name="passwordInput" id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="loginbtn" class="btn btn-warning btn_placement">login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <?php 
         require('../db.php');

         echo'<script type="text/JavaScript"> 
                    alert("LOGIN DETAILS FOR ADMIN\n--------------------------------\nEmail : admin@gmail.com\nPassword : 123");
                 </script>';

                //  mysqli_query($con,"INSERT INTO admin(Admin_Email_Address, Admin_Password) VALUES ('$email', '$password')");

         if(isset($_POST["loginbtn"])) {
                
                $username = 'admin';
                $password = '123';
                $email = 'admin@gmail.com';

                $varEmail = $_POST["emailInput"];
                $varPass = $_POST["passwordInput"];

                $queryRead = mysqli_query($con,"SELECT Admin_Email_Address, Admin_Password FROM admin WHERE Admin_Email_Address = '$email'");
                $numrows = mysqli_num_rows($queryRead);

                if(!empty($varEmail) && !empty($varPass)) { 
                      if($numrows != 0) {
                          while($row = mysqli_fetch_assoc($queryRead)) {
                              $db_email_login = $row['Admin_Email_Address'];
                              $db_password_login = $row['Admin_Password'];
                          }
                          if($varEmail == $db_email_login &&  $varPass == $db_password_login) {
                              session_start();
                              $_SESSION["Admin_Email_Address"] = $varEmail;
                              header('location:homepage.php');
                                      
                          } else if($varEmail != $db_email_login ||  $varPass != $db_password_login) {  
                              echo "<script> alert('Incorrect credentials, please try again'); </script>";
                          } 
                      } else {
                          $queryInsert = mysqli_query($con,"INSERT INTO admin(Admin_Email_Address, Admin_Password) VALUES ('$email', '$password')");
                          header('location:index.php');
                      }
                } else {
                    echo "<script> alert('Please don't leave the input blank!'); </script>";
                }
        }
    ?>
</html>