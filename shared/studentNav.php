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
        <div class="dropdown">
          <a id="main_link" href="#" onclick="myFunction();" class="dropbtn"><img src="../pic/bell.png" height="40px" width="40px" /></a>
          <div id="myDropdown" class="dropdown-content">
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
              <div class="col col_2_left">
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
              <div class="col col_2_left">
                  <span>Tutorial 2 - Android Activity and Intent</span>
                  <br/>
                  <small>Mobile App Development (DIT1518)</small>
              </div>
            </div>

          </div>
        </div>
        <a id="main_link" href="#about"><p>VIEW-TO-DO-LIST</p></a>
        <a id="main_link" href="#contact"><p>JOIN CLASSROOM</p></a>
        <a id="main_link" href="#news"><p>LOGOUT</p></a>
      </div>
    </body>
  
    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn img')) {
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