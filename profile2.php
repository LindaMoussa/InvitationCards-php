<html>
    <head>
        
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/profile2.css"/> 
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="css/all.css"/>
        <link rel="stylesheet" href="css/contactus.css">
        <link rel="stylesheet" href="css/editor.css">
     </head>
   
     <body>
          <?php 

	
	include 'navbar.php';

?>
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
                            <a class="nav-link" href="index.html">Home</a>
                          </li>
                      
                           <li class="nav-item">
                            <a class="nav-link " href="editor.html">Editor</a>
                          </li>
                             <li class="nav-item">
                            <a class="nav-link " href="about.html">About</a>
                          </li>
                             <li class="nav-item">
                            <a class="nav-link " href="contact.html">Contact</a>
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
              <button id="logBtn"class="btn btn-outline-secondary   m-5 my-sm-0" type="submit">Sign Up</button>


              </div>
          </div>
                </nav></div>
        </section>
-->
         
        <div class="container my-5 profile-sec ">
        <div class="row ">
            <div class="profile col-md-3 mt-5">
                <img class="img-fluid w-100  rounded-circle position-relative" src="images/profile/default.jpeg" alt="person">
                <div class="layer rounded-circle position-absolute"><button id="changeProfile" class="btn text-white btn-outline-danger position-absolute">Change Profile Picture</button>
                <input id="imgUpload"type="file">    
                
                </div>
            </div>
            <div class="profileInfo col-md-9 pt-5 pl-5">
                <div class="col-12  pl-5">
                <div class="row ">
                    <div class="col-6 username ">
                        <h2 id="name">Ahmed Mohammed</h2>
                        <input type="text" class="form-control" id="editUserName" placeholder="User Name">
                    
                    </div>
                    <div class="col-6  mt-2">
                        <a  id="editBtnName" class=" px-3 py-2 remBtn">Edit</a>
                         <a  id="doneBtnName" class=" px-2 py-2 editBtn">Done</a>
                    </div>
                </div>
                </div>
                <div class="col-12 pl-5 mt-4">
                <div class="row">
                    <div class="col-6 useremail">
                        <h4 id="email">Ahmed_Mohammed@gmail.com</h4>
                        <input type="email" class="form-control" id="editUserEmail" placeholder="Email">

                    </div>
                    <div class="col-6"><a id="editBtnEmail" class="py-2 px-3 remBtn">Edit</a>
                        <a  id="doneBtnEmail" class=" px-2 py-2 editBtn">Done</a>
                    </div>
                </div>
                </div>
                <div class="col-12 pl-5 my-4">
                     <div class="row">
                    <div class="col-6 userbio">
                     <p id="bio">A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea</p>
                    <textarea class="form-control" id="editUserBio" rows="3" placeholder="Bio"></textarea>
                    </div>
                    <div class="col-6"><a  id="editBtnBio"class="py-2 px-3 remBtn">edit</a>
                        <a  id="doneBtnBio" class=" px-2 py-2 editBtn">Done</a></div>
                </div>
                </div>
             
                <div class="col-12 pl-5">
                <div class="row">
                    <div class="col-6"><a class="py-2 px-3 remBtn">Change Password</a></div>
                    <div class="col-6"><a class="py-2 px-3 remBtn">Deactivate Account</a></div>

                </div>
                </div>
            </div>
            </div></div>
        <section class="container sec my-5 saved-cards">
            <h2 class="text-center my-5">Your Saved Cards</h2>
            <div class="row mt-5" id="savedCardsRow">    
              
<!--
                        <div class="col-md-4 my-2">
                            <img class="img-fluid w-75" src="images/profile/ic1.jpg"/>
                            <p class="float-left mt-3"><a class="py-2 px-3 remBtn">remove</a></p>
                        </div>
                        
                        <div class="col-md-4 my-2">
                            <img class="img-fluid w-75" src="images/profile/ic2.jpg"/>
                            <p class="float-left mt-3"><a class="py-2 px-3 remBtn">remove</a></p>                        
                        </div>
                    
                        
                        <div class="col-md-4  my-2">
                            <img class="img-fluid w-75" src="images/profile/ic3.jpg"/>
                            <p class="float-leftr mt-3"><a class="py-2 px-3 remBtn">remove</a></p>                        
                        </div>
                       <div class="col-md-4  my-2">
                            <img class="img-fluid w-75" src="images/profile/ic1.jpg"/>
                            <p class="float-left mt-3"><a class="py-2 px-3 remBtn">remove</a></p> </div>
                        
                        <div class="col-md-4 my-2">
                            <img class="img-fluid w-75" src="images/profile/ic2.jpg"/>
                            <p class="float-left mt-3"><a class="py-2 px-3 remBtn">remove</a></p></div>
                    
                        
                        <div class="col-md-4 my-2">
                            <img class="img-fluid w-75" src="images/profile/ic3.jpg"/>
                            <p class="float-left mt-3"><a class="py-2 px-3 remBtn">remove</a></p></div>
-->
            </div>
        </section>

        
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
                                  <a href="https://www.google.com" class="m-4 text-light"><i class="fab fa-google-plus"></i></a>
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
        <script src="js/savedImages.js"></script>
        <script src="js/popup.js"></script>
    

</body>

</html>