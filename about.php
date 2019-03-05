<html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/all.css"/>
        <link rel="stylesheet" href="home.css"/>       
        <link rel="stylesheet" href="css/about.css"/>
        

    </head>
    <body>
        
        <?php 

	
	include 'navbar.php';

?>

        
       
        <div id="about" class="text-center">
        <h2 class="text-center my-5">About Us</h2>
        <img class="img-fluid img1" src="images/profile/invitation_card.jpg"/>
            <p class="para px-5 mt-5">Celebrate life’s joys with Invitation Cards. Let us make your event special.</p>
            
            </div>
        
          <footer class="mt-5">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-4 mb-4 mt-5">
                                <h5><span>Explore</span></h5>
                                <br/>
                                <a href="index.html"><h6 class="text-light">Home</h6></a>
                                <br/>
                                <a href="editor.html"><h6 class="text-light">Editor</h6></a>
                            </div>


                            <div class="col-md-4 mb-4 mt-5">
                                <h5><span>About</span></h5>
                                <br/>
                                <a href="about.html"><h6 class="text-light">About Us</h6></a>
                                <br/>

                            </div>
                           <div class="col-md-4 mb-4 mt-5">
                               <h5><span>Stay Connected</span></h5>
                               <br/>
                               <h6 ><a class="text-light" href="contact.html">Contact Us</a></h6>
                              <div class="row ">
                                  <a href="https://www.facebook.com" class="m-4 text-light"><i class="fab fa-facebook-f"></i> </a> 
                                  <a href="https://www.teitter.com" class="m-4 text-light"><i class="fab fa-twitter"></i> </a> 
                                  <a href="https://www.google.com" class="m-4 text-light"><i class="fab fa-google-plus-g"></i></a>
                                  <a href="https://www.instagram.com" class="m-4 text-light"><i class="fab fa-instagram"></i> </a>                                  
                             </div>
                            </div>
                        </div>      
                    </div>

                </footer>
<!--          popup      -->
         <div class="container-fluid lightbox-container ">
        
            <div class="row ">
            
            
                <div class="col-md-4 lightbox-holder mx-auto align-items-start">
                
                
                    <div class="lightbox-item bg-light mx-auto rounded">
                        <div class="reg-card">
                    <h2>Register</h2>
                            
<?php 

	
	include 'register.php';

?>

</div>

 <?php 

	
	include 'login.php';

?>                        
                    </div>
                    <span class="light-close">
                        <i class="fas fa-window-close"></i>
                    </span>
                </div>
            
            </div>
        
        </div>
        </body>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
<!--        <script src="js/about.js"></script>-->

        <script src="js/popup.js"></script>

    
</html>