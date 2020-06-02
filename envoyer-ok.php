<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> <head>
<meta name="format-detection" content="telephone=no"/>
<meta content="text/html; charset=utf-8" http-equiv="content-type">
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
    
    <title>Portfolio JF - Contact</title>
    
  <link rel="stylesheet" href="stylesheet-ok2.css">
   <link rel="stylesheet" href="menu-ok2.css">
  <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" id="elementor-icons-shared-0-css" href="css/fontawesome.min.css?ver=5.12.0" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="css/solid.min.css?ver=5.12.0" type="text/css" media="all"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
  <!-- popup -->
  <link rel="stylesheet" href="css/pop/index.css" />
  <link rel="stylesheet" href="css/pop/_defaults.css" />
  <link rel="stylesheet" type="text/css" href="css/style-mail.css" />
 
 <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body>



  <a id="top"></a>
 <div class="main">	
 <nav>
<ul class="menu">
<a href="index.html"><li class="logo"><strong>Jean-François Hache</strong><br>
Designer UX/UI</li></a>
<li class="menu-item"><a href="index.html#portfolio">Portfolio</a></li>
<li class="menu-item"><a href="index.html#ressources">Methodo</a></li>
<li class="menu-item"><a href="index.html#cv">CV</a></li>
<li class="menu-item"><a href="index.html#">contact</a></li>
<!--<li class="menu-item search">
<form id="search">
<input type="search" placeholder="search">
</form>
</li>-->
<li class="menu-item tel font-2l"><a href="#cv"><i class="fab fa-linkedin-in"></i></a> <a href="#cv"><i class="fab fa-instagram"></i></a> <a href="#cv"><i class="fab fa-spotify"></i></a> &nbsp;</li>
<li class="toggle">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</li>
</ul>
</nav>

<br><br><br><br>
    <div class="container">	
      <a id="portfolio"></a>
      <h1>¬ CONTACT</h1> <span style="font-size: 1.5em; padding-right: 25px; padding-top:25px; float: right; display:inline-block;"><a href="projet5.html"><i class="fas fa-angle-left" ></i></a></span>
      <br>

      <img src="imgs/projet6/header-projet6.jpg" alt="projet 6 top">


           
   <div class="wrapper">  
    <div id="notreformulaire">
    <?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = $subject = "";


// Get values from the form
$name=$_POST['name'];
$city=$_POST['city'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];




if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Veuillez saisir votre nom svp<br>";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
       $nameErr = "saisissez seulement des lettres et des espaces blancs<br>"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Veuillez saisir votre mail svp<br>";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Veuillez ressaisir votre mail svp<br>"; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     } 
   }

   if (empty($_POST["monmessage"])) {
     $monmessage = "";
   } else {
     $monmessage = test_input($_POST["monmessage"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}




 
$to = "tenhopehorses@gmail.com"; 
/*$subject = "Mon Contact Form";*/
$message = " Nom : " . $name . "\r\n Sujet : " . $subject . "\r\n Téléphone : " . $phone . "\r\n Email: " . $email . "\r\n Message: " . $monmessage;
 
 
$from = "JF";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if ((preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) & (preg_match("/^[a-zA-Z ]*$/", $name))) { mail($to,$subject,$message,$headers);

    echo "<font class='mail_ok'>Le message a bien été envoyé. Merci.
	<br><br>Retourner à la <a href='index-ok.html' style='text-decoration:none;'>page d'accueil</a></font>";
} else {
    echo '<form name="form1" id="formulairedecontact" method="post" action="envoyer-ok.php">
        Nom complet :
        <input type="text" name="name" id="name" value='.$name.' required autofocus><span class="formerror">'.$nameErr.'</span>
        <br />Telephone :
        <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="phone" id="phone" value='.$phone.'>
		<br>Email :
        <input type="email"  name="email" id="email" pattern="[^ @]*@[^ @]*" value='.$email.' required><span class="formerror">'.$emailErr.'</span>
		<br>Sujet : 
		<input id="subject" name="subject" type="text" value='.$subject.'>
      	<br>Message :
		<textarea name="monmessage" id="monmessage" rows="6" cols="50"></textarea>
				
		<input class="sendButton" type="submit" name="Submit" value="Envoyer">
			
	</form>';
}

?><br /><br /><br /><br /><br /><br />
	</div>
   </div>

            <footer>
            
             <div class="gotop"><a href="projet5.html"><i class="fas fa-angle-left" ></i></a> &nbsp; &nbsp;<a href="#top"><i class="fas fa-arrow-up"></i></a></div><br><br>
            </footer>

          </div>



          <br><br>
        <!-- END MAIN -->

      </div>

   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
      
     <!-- popup -->
      <script src="js/imagelightbox.min.js"></script>
<script src="js/index.js"></script> 
<div class="ad">
  <a href="#" class="ad__close" title="Close the ad"></a></div>

      
      <script id="rendered-js">
	  
<!-- top -->	  
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]').
not('[href="#0"]').
click(function (event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&

    location.hostname == this.hostname)
  {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top },
        1000, function () {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) {// Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
//# sourceURL=pen.js
</script>
<!-- Collapse -->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<!-- popup -->

<!-- MENU -->
<script id="rendered-js">
$('.toggle').click(function () {
  $(this).toggleClass("is-active");
  if ($(".menu-item").hasClass("active")) {
    $(".menu-item").removeClass("active");
  } else {
    $(".menu-item").addClass("active");
  }
});
//# sourceURL=pen.js
    </script>

</body>
</html>