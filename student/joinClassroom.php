<?php 
    include("../auth_sessionStudent.php");  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/teacher/joinClassroom.css" /> 
        <style>
            .dropdown {
                margin-top: 0 !important;
            }
        </style> 
    </head>
    <body style="background-color: black;">
    <div style=""><?php include '../shared/test.php';?>
        <div class="wrapper container-xxl">
        
            <div class="row">
                <div class="col">
                    <div class="wrapper_sub container-xl">
                        <div class="wrapper_sub_first" style="background-color: #FFD801;">
                            <h5>TSE2101 - SOFTWARE ENG. FUND <br/>TC3V</h5>
                        </div>
                        <div class="wrapper_sub_second wrapper_sub_second_pos">
                            <form method="POST">
                                <h3>Join Classroom</h3>
                                <br>
                                <label1 for="">Class Code :</label1>
                                <br><br>
                                <input type="text" id="code e" name="code" placeholder="enter class code here..." required>
                                <br><br>
                                <label2 for="">*</label2>
                                <label3 for="">Please ask your lecturer for the class code, then enter here.</label3>
                                <br><br><br><br><br><br><br><br><br>
                                <p align="right" style="margin-right: 3%">
                                     <button type="submit" class="btn btn-secondary" name="cancelBtn">Cancel</button>
                                    <button type="submit" class="btn btn-primary" style="padding: 6px 21px;" name="joinBtn">Join</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
    <?php 
        
        $email = $_SESSION['Student_Email_Address'];
        $password = $_SESSION['Student_Password'];
        $db_code = 0;

        require('../db.php');  

        if (isset($_POST['cancelBtn'])) {
            echo "<script type='text/javascript'> window.top.location='viewClassroomMain.php'; </script>";
        }
        elseif (isset($_POST['joinBtn'])) {
            $varCode = trim($_POST["code"]);
            
            $queryRead = mysqli_query($con, "SELECT Class_Code FROM classroom where Class_Code = '$varCode' ");
            $queryCheck= mysqli_query($con, "SELECT Student_ClassroomCode FROM student where Student_ClassroomCode = '$varCode' ");
            
            while($row = mysqli_fetch_assoc($queryRead)) {
                $db_code = $row['Class_Code'];
            }
            if($varCode == $db_code) { 
                
                if(mysqli_num_rows($queryCheck) > 0){
                    echo "<script> alert('You have already joined this classroom!'); </script>";
                }
                else {
                    $enterVarCode = $varCode;

                    $result = mysqli_query($con, "INSERT INTO student(Student_Email_Address, Student_Password, Student_ClassroomCode) 
                    VALUES ('$email', '$password', '$enterVarCode')");

                    echo "<script>  
                            alert('Congratulation! You have joined this classroom');
                            window.top.location='viewClassroomMain.php';
                          </script>";
                }
            }
            else if($varCode != $db_code) {
                echo "<script> alert('Invalid class code!');</script>";
            }
        }
    ?>
</html>
