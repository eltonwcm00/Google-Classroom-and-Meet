<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/globalNav.css" />
      <link rel="stylesheet" href="../css/student/studentDropNav.css" />
    </head>
    <body>
      <div class="topnav">
        <a id="main_link" class="misc-pic" href="#home"><img src="../pic/loggedin_profilepic.jpg" height="40px" width="40px" /></a>
        
        <!-- <a id="main_link" href="#" onclick="myFunction();" class="dropbtn"><img src="../pic/bell.png" height="40px" width="40px" /></a> -->

        <!-- TO-DO LIST -->
        
        <div class="dropdown">
          <a id="main_link" href="#" onclick="myFunction();" class="dropbtn"><img src="../pic/bell.png" height="40px" width="40px" /></a>
          <div id="myDropdown0" class="dropdown-content">
            <div class="triangle-up">.</div>
            <div class="reminder_header">To-Do List</div>
            
            <div class="reminder_header_title">Assigned<hr/></div>
            
            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/to-do.jpg" width="32px"/>
              </div>
              <div class="col col_2_left">
                  <span>Project Booking Title</span>
                  <br/>
                  <small>Object Oriented Programming (DOO1518)</small>
              </div>
            </div>

            <div class="reminder_header_title">Missing<hr/></div>

            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/to-do.jpg" width="32px"/>
              </div>
              <div class="col col_2_left" style="background-color: red;">
                  <span>Tutorial 1 - Introduction to Data Structure and Algorithm</span>
                  <br/>
                  <small>Data Structure and Algorithm (DDS1518)</small>
              </div>
            </div>

            <div class="reminder_header_title">Completed<hr/></div>

            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/to-do.jpg" width="32px"/>
              </div>
              <div class="col col_2_left" style="background-color: green;">
                  <span>Tutorial 2 - Android Activity and Intent</span>
                  <br/>
                  <small>Mobile App Development (DIT1518)</small>
              </div>
            </div>
          </div>
        </div>
        
        
        
        <!-- ASSIGNMENT REMINDER -->
        
        <div class="dropdown">
          <a style="background-color: #F5D10D;" id="main_link" onclick="myFunction0();" class="dropbtn" href="#contact"><p>VIEW TO DO LIST</p></a>
          <div id="myDropdown" class="dropdown-content" style="margin-left: -6%;">
            <div class="triangle-up" style="margin-left: auto; margin-right: 16px;">.</div>
            <div class="reminder_header">Assignment Reminder</div>
            
            <div class="reminder_header_title">This Week<hr/></div>
            
            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/teacherA.png" width="32px"/>
              </div>
              <div class="col col_2_left">
                  <span>Sir Wang 1108</span>
                  <br/>
                  <small>Posted a new assignment: How to play Green Light!, Red Light!</small>
              </div>
            </div>

            <div class="reminder_header_title">Next Week<hr/></div>

            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/chat_b.jpg" width="32px"/>
              </div>
              <div class="col col_2_left" >
                  <span>Madam Jung Ho-yeon</span>
                  <br/>
                  <small>Posted a new assignment: Identify which one is tempered glass!</small>
              </div>
            </div>

            <div class="reminder_header_title">Missing<hr/></div>

            <div class="content_row row">
              <div class="col-sm-3 col_1">
                  <img src="../pic/chat_a.jpg" width="32px"/>
              </div>
              <div class="col col_2_left">
                  <span>Madam Lee Ji-eun</span>
                  <br/>
                  <small>Posted a new assignment: OOPDS Assignment 1</small>
              </div>
            </div>
          </div>
        </div>
        
        <a id="main_link" href="joinClassroom.php"><p>JOIN CLASSROOM</p></a>
        <a id="main_link" href="../logout.php"><p>LOGOUT</p></a>
      </div>
    </body>
  
    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
     
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      function myFunction0() {
        document.getElementById("myDropdown0").classList.toggle("show");
      }
      

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches(['.dropbtn img', '.dropbtn p'])) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
  </html>