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
                            <button type="submit" name="teacher_btn" class="btn_placement btn btn-primary">Teacher</button>
                            <button type="submit" name="student_btn" class="btn_placement btn btn-primary">Student</button>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="row_form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" name="emailInput" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" name="passwordInput" class="form-control" id="exampleInputPassword1" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php 
         require('db.php');

         $varEmail = trim($_POST["emailInput"] ?? "");
         $varPass = trim($_POST["passwordInput"] ?? "");
         
         $db_email_login = "";
         $db_password_login = 0;

         if(isset($_POST["teacher_btn"]) || isset($_POST["student_btn"])) {
            
            if(isset($_POST["teacher_btn"])) {
                $queryReadTeacher = mysqli_query($con,"SELECT Teacher_Email_Address, Teacher_Password FROM teacher WHERE Teacher_Email_Address = '$varEmail'");
                $numrows = mysqli_num_rows($queryReadTeacher);
    
                if($numrows != 0) {
                    while($row = mysqli_fetch_assoc($queryReadTeacher)) {
                        $db_email_login= $row['Teacher_Email_Address'];
                        $db_password_login = $row['Teacher_Password'];
                    }
                    if($varEmail == $db_email_login &&  $varPass == $db_password_login) {
                        session_start();
                        $_SESSION["Teacher_Email_Address"] = $varEmail;
                        header('location:teacher/viewClassroomMain.php');        
                    } 

                }
            }
            
            else if(isset($_POST["student_btn"])) {
                $queryReadStudent = mysqli_query($con,"SELECT Student_Email_Address, Student_Password FROM student WHERE Student_Email_Address = '$varEmail'");
                $numrows = mysqli_num_rows($queryReadStudent);
    
                if($numrows != 0) {
                    while($row = mysqli_fetch_assoc($queryReadStudent)) {
                        $db_email_login = $row['Student_Email_Address'];
                        $db_password_login = $row['Student_Password'];
                    }
                    if($varEmail == $db_email_login &&  $varPass == $db_password_login) {
                        session_start();
                        $_SESSION["Student_Email_Address"] = $varEmail;
                        header('location:student/viewClassroomMain.php');        
                    } 
                }
            }

            if($varEmail != $db_email_login || $varPass != $db_password_login) {
                echo "<script> alert('Incorrect credentials, please try again'); </script>";
            }
         }
    ?>
</html>