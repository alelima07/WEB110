<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Jackie Explorer</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap&subset=vietnamese" rel="stylesheet">
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!-- MenuMaker plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <!-- Icon library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
 <script src="js/script.js"></script>
 </head>
 <body>

     <header>
        <h1><a href="index.html">Jackie Explorer</a></h1>
         
         <div class="container">
        
        <div class="container1">

        <h1>Jackie Explorer</h1>
    

    </div>
          </div>
             </header>
     
         <main> 
    
         <nav id="cssmenu">
          <ul>
             <li><a href="../fp/index.html"><i class="fa fa-fw fa-home"></i> Home</a></li>
             <li><a href="../fp/countries.html"><i class="fa fa-fw fa-institution"></i> Places Visited</a></li>
             <li><a href="../fp/about.html"><i class="fa fa-fw fa-camera-retro"></i> About</a></li>
             <li><a href="../fp/contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
          </ul>
        </nav>

 <!-- START LEFT COLUMN -->
       <section class="fullWidth">
            <div class="indent">
       
       <?php
          /*
           * Below are 2 different forms to be re-used       
           * 
           * Only use one at a time, comment out the other!       
           *
           */

          include 'includes/contact_include.php'; #site keys & code here
      
          $toAddress = "alelima07@gmail.com";  //place your/your client's email address here
          $toName = "Jackie Explorer"; //place your client's name here
          $website = "Contact Form Test";  //place NAME of your client's website

          echo loadContact('simple.php');#demonstrates a simple contact form
          //echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>

          </div>
        </section>

     <!-- END LEFT COLUMN -->
         
         <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Jackie Explorer </a>. All Rights Reserved ~ <a href="../fp/disclaimer.html" target="_blank">Website Disclaimer</a> ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
          
     </main>
    
     <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
</body>
</html>