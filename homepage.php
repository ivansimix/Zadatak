<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
} 

	?>
	
	

<!DOCTYPE html>

<html>
    <head>

  <!--SKRIPTA KOJA UCITAVA STRANICU-->
            <script src="homepage.js"> </script>
               

        <title>Alpha by HTML5 UP</title>
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <link rel="stylesheet" type="text/css" href="global.css">
    </head>


    <body onload="loadScreen()">

            <script> </script>

   <!-- LOADER/SPINNER -->
            <div id="loader">
                    <span class="spinner"></span>  
            </div>


  <!--SVE SA POCETNE STRANE-->
    <div id = "content" style="display:none;">
        <!--HEADER-->

         <header id = "myHeader">
                <h1><p style="display:inline" id="naslov"><p style="display:inline" id="alpha"><a href="http://google.com" style="text-decoration:none">Alpha</a></p> by HTML5 UP</p></h1>
                     <div class="btn-group">

                            <button class = "rndr btn">Sign Up</button>
                            <button class = btn>Layouts</button>
                            <button class="rndl btn">Home</button>
                            
                    </div> 
          </header>

          <script>
                window.onscroll = function() {myFunction()};
                
                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;
                
                function myFunction() {
                  if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                  } else {
                    header.classList.remove("sticky");
                  }
                }
                </script>
                

          <!--COVER SLIKA-->
        
         <div id="cover">
               <div class="titleAlpha"> <div style="font-size:2.5em;">Alpha</div>  Another fine responsive site template freebie by HTML5 UP.</div>
              
                        <img class= "image1" src="images/cover.jpg" alt="cover" style="width:100%">
                        <img class = "image2" src="images/overlay.png" alt="overlay" style="width: 100%">
                <div class = "twoButtons" >
                        <button class ="twob1"> Sign Up</button>
                        <button class="twob2">Learn More</button>

                </div>
                    
         </div>

         <!--PRVA SLIKA -->

         <div class="fcontent" style="text-align:center">
            <div style="
                color:#786f6f;
                font-size:2em;
                font-stretch: expanded;
                transform: translate(0, -270px)
                ">  Introducing the ultimate mobile app for <br> doing stuff with your phone </div>
                <hr width="50%" style = "
               
                
                transform: translate(0, -220px);

                "> 

           <div style = "
           transform: translate(0, -50px);
           color:black;
           "> Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare <br> adipiscing nunc adipiscing. Condimentum turpis massa.</div>
            <img style="width:100%; height:400px; transition:0.3s" class="imagefirst" id ="imagefirst" src="images/prva.jpg" onclick="changeImage()" >
            <button  class = "learnmore" id="learnmore" style = "
            border: 1px solid #fff;
            height:30px;
            width:120px;
            border-radius:4px;
            background-color:#bbb;
            transition:0.3s;
            color:white;
            margin-top:20px;

            " >Learn More</button>

            

         </div>





    


                    
                  
        
        
           
    
        
         <footer>
     
                   <img class="social"  src="images/icons.png" alt="social" >
       
               
               <p style="text-align: center;color:#786f6f; padding-bottom: 10px; padding-top:5  px ">&copy; Untitled. All rights reserved. Design:<a href="http://google.com" style="text-decoration:none">HTML5 UP</a></p>
            </footer>
    

    </div>
</html>




