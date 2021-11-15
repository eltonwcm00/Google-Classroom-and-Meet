<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/globalNav.css" />
    </head>
    <body>
      <div class="topnav">
        <a class="misc-pic" href="#home"><img src="../pic/loggedin_profilepic.jpg" height="40px" width="40px" /></a>
        <div class="dropdown">
          <a href="#" onclick="myFunction();" class="dropbtn"><img src="../pic/bell.png" height="40px" width="40px" /></a>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
          </div>
        </div>
        <a href="#about"><p>VIEW-TO-DO-LIST</p></a>
        <a href="#contact"><p>JOIN CLASSROOM</p></a>
        <a href="#news"><p>LOGOUT</p></a>
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