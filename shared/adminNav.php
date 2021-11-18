<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/globalNav.css" />
      <link rel="stylesheet" href="../css/admin/adminDropNav.css" />
      <style>
        .dropdown-content {
          margin-left: 0;
        }
        
        .dropdown {
          margin-top: 0;
        }
      </style>
    </head>
    <body>
      <div class="topnav">
        <a id="main_link" class="misc-pic" href="homepage.php"><img src="../pic/profilepic.png" height="40px" width="40px" /></a>
        <a id="main_link" href="../admin/sendAssignmentReminder.php"><p>SEND ASSIGNMENT<br/> REMINDER</p></a>
        <div class="dropdown">
          <button class="dropbtn">CREATE ACCOUNT</button>
          <div class="dropdown-content ">
            <div class="triangle-up" ></div>
            <div class="creation_acc">.</div>
            <a href="../admin/createTeacherAccount.php"><p>Register For Teacher</p></a>
            <a class="creation_acc_stud" href="../admin/createStudentAccount.php" ><p>Register For Student</p></a>
          </div>
        </div>
        <a href="../logout.php" style="background-color: #FBB117;"><p>LOGOUT</p></a>
      </div>
    </body>
  </html>