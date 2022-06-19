<!DOCTYPE html>
<html lang="en"> 
 <head>
  <title>SINIT HAILE : contact form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" herf="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>Sinit haile : contact form</h1>
     <nav class="topnav" id="myTopnav">
     <a href="index.html">Welcome</a>
     <a href="elements.html">HTML Elements</a>
     <a href="aia.html">AIA</a>
     <a href="big/index.html">BIG</a>
      <a href="http://w3schools.com" target="_blank">W3 Schools</a>
      <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
     <a href="flowchart.html">Flowchart</a>
      <a href="fp/index.html">Final Project</a>
      <a href="contact.php" class="active">Contact Sinit</a>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
       <h2 class="subheader">contact sinit </h2>
       <?php
         include 'includes/contact_include.php'; #site keys & code here
        $toAddress = "prov311112@yahoo.com";  //place your/your client's email address here
        $toName = "sinit"; //place your client's name here
        $website = "web-students.net";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      
       <p class="clear-recaptcha"></p>
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">Sinit g  Haile</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
</div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
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