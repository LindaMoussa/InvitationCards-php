
<html>
    <head>
    
     <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/all.css"/>
        <link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="css/contactus.css"/>
                <link rel="stylesheet" href="css/editor.css"/>  


    </head>

    <body>
         <?php 

	
	include 'navbar.php';

?>
<!--        sec1-->

<!--
                  <section class="sec1 position-relative" >
                <div class="navBar position-absolute" >    
                  <nav class="navbar position-fixed navbar-expand-lg nevs py-2">
                      <a href="index.html"><img  class="img-fluid my-5 logo " src="images/darklogo.png"  ></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto ">
                          <li class="nav-item active">
                            <a class="nav-link" href="index.html"> Home</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link " href="editor.html">Editor</a>
                          </li>
                             <li class="nav-item">
                            <a class="nav-link " href="about.html">About</a>
                          </li>
                             <li class="nav-item">
                                 <a class="nav-link " href="contact.html"><span>Contact</span></a>
                          </li>

                            
                        </ul>
                          <div class="profileIcon">
                             <a class="nav-link " href="profile2.html"><i class="far fa-user fa-lg"></i> </a>
                          </div>

            <div class="form-inline my-2 my-lg-0">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fab fa-facebook-f  pl-2"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-twitter "></i></a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
              </li>
                 <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram "></i></a>
            </ul>
              <button id="logBtn" class="btn btn-outline-secondary   m-5 my-sm-0" type="submit">Sign Up</button>


              </div>
          </div>
                </nav></div>
                </section>
-->
         
<!--        <contact us form>-->
        

        <div class="contact ">
             <h2 >Contact Us</h2>
            <br/><br/>
            <form>
                
  <div class="form-group row w-30" >
      <label for="inputPassword" class="col-sm-2 col-form-label">Name :</label>
      <div class="col-sm-10">
                <input type="text" class="form-control" id="Input Your Name"   placeholder="Name">

    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="exampleFormControlInput1"  placeholder=" .......@example.com"/>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Message :</label>
    <div class="col-sm-10">
                    <textarea class="form-control"placeholder=" Enter Your Message"  id="exampleFormControlTextarea1" rows="3"></textarea>
         <button class="btn btn-outline-secondary my-5"  type="submit"> Submit </button>

    </div>
  </div>
                     
  
</form>
        </div>
<!--       <footer>-->
        <br/><br/>
       <br/>
       <br/>
       
         <footer class=" mt-5">
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
                                <h6 class="text-light">About Us</h6>
                                <br/>

                            </div>
                           <div class="col-md-4 mb-4 mt-5">
                               <h5><span>Stay Connected</span></h5>
                               <br/>
                               <h6 ><a class="text-light" href="index_contact.html">Contact Us</a></h6>
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
    
		  
	 <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popup.js"></script>
    
    </body>
    
</html>













