<html>
    <head>
        
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="css/editor.css"/>  
        <link rel="stylesheet" href="css/all.css"/>
        

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

        <title>Invitation Cards</title>
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/fontselect-alternate.css" />
    
    </head>
   
    <body>
    <?php 

	
	include 'navbar.php';

?>
        
<!--
        <section class="sec1 position-relative mb-5" >
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
                            <a class="nav-link " href="editor.html"><span >Editor</span></a>
                          </li>
                             <li class="nav-item">
                            <a class="nav-link " href="about.html">About</a>
                          </li>
                             <li class="nav-item">
                            <a class="nav-link contact " href="contact.html">Contact</a>
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
                          <button class="btn btn-outline-secondary m-5 my-sm-0" id="logBtn"type="submit">Sign Up</button>


                          </div>
          </div>
                </nav></div>
                </section>
-->
        
        <section class="editor my-5">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-4 mt-5">
                        <div class="menues">
                            <div class="row">
                                <div class="menueList col-4">
                                    <ul class="menueOptions list-unstyled pt-3">
                                        <li id="cardSizeBtn" class="text-center py-2"><i class="fa fa-columns fa-lg"></i><p class="mb-0 pt-1">  Card Sizes  </p></li>
                                        <li id="bgColorBtn" class="text-center py-2"><i class="fas fa-palette fa-lg"></i><p class="mb-0 pt-1"> Bg Colors </p></li>
                                        <li class="text-center py-2"><i class="fas fa-image fa-lg"></i><p class="mb-0 pt-1">  Bg Options  </p></li>
                                        <li id="clipBtn" class="text-center py-2"><i class="fa fa-cubes fa-lg"></i><p class="mb-0 pt-1">  Clip Arts  </p></li>
                                        <li class="text-center py-2"><i class="fa fa-font  fa-lg"></i><p class="mb-0 pt-1"> Text </p></li>
                                        <li class="text-center py-2"><i class="fa fa-upload fa-lg"></i><p class="mb-0 pt-1"> Upload </p></li>
                                        
                                    </ul>
                                </div>
                                <div class="col-7 optionList">
                                    <div class="cardSizeArea">
                                    <h5 class="text-white py-3">Card Sizes:(inches)</h5>
                                    <div class="row">
                                        <div id="size48" class="col-6 my-2 px-1">
                                            <img class="img-fluid" src="images/zzz.png">
                                        </div>
                                        <div id="size57" class="col-6 my-2 px-1"><img class="img-fluid" src="images/vvv.png"></div>
                                        <div id="size69" class="col-6 my-2 px-1"><img class="img-fluid" src="images/xxx.png"></div>
                                        <div id="size554" class="col-6 my-2 px-1"><img class="img-fluid" src="images/www.png"></div>
                                        </div>
                                    </div>
                                    <div class="bgColorArea">
                                        <h5 class="text-white py-3">Background Color</h5>
                                        <div class="row ml-2">
                                            <div class="col-2 my-2 mx-1 rounded-circle red"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle yellow"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle green"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle white"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle purple"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle blue"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle black"></div> 
                                            <div class="col-2 my-2 mx-1 rounded-circle pink"></div> 
                                            <div class="col-2 my-2 mx-1 rounded-circle orange"></div> 
                                            <div class="col-2 my-2 mx-1 rounded-circle brown"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle grey"></div>
                                            <div class="col-2 my-2 mx-1 rounded-circle lightblue"></div>
                                                <br>   
                                        </div>
                                          
                                        <div class="input-group mb-3">
                                          <h6 class="my-2  text-white">Custom color : </h6>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="color" class="form-control px-2 colorPicker rounded" name="favcolor" value="#ea0647">
                                                        <br><br>

                                                    </div>
                                                </div>
                                            </div>   
                                        </div>         
                                    </div>
                                    
                                    <div class="bgOptionsArea">
                                    <div class="row">
                                        <div class="col-12 my-2 text-center">
                                            <button type="button" id="clearBackground" class="btn btn-warning my-3 rounded px-3 py-2">Clear Background</button>
                                            <h6 class="text-white my-1">Transparency:</h6>
                                            <input class="form-control transparentRange pt-0" type="range" min="0" max="1" value="0.5" step="0.1">
                                            <h6 class="text-white my-2 mb-3" >Gradient:</h6>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="text-white">Color1:</span>
                                                        <input type="color" class="form-control g1ColorPicker rounded" name="favcolor" value="#ea0647">

                                                    </div>
                                                    <div class="col-6">
                                                        <span class="text-white">Color2:</span>
                                                        <input type="color" class="form-control g2ColorPicker rounded" name="favcolor" value="#ea0647">
                                                    </div>
                                                    <div class="row mt-3 text-left ">
                                                        <div class="col-6 pl-4 ">
                                                            <div class="form-check">
                                                                  <input class="form-check-input " type="radio" name="exampleRadios" id="Radio1" value="option1">
                                                                <label class="form-check-label text-white pl-2" for="exampleCheck1">Top</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-6 pl-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="Radio2" value="option2">
                                                                <label class="form-check-label text-white pl-2" for="exampleCheck1">Bottom</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            </div> 
                                            <button type="button" id="applyGrad" class="btn btn-warning my-3 rounded px-4 py-2">Apply Gradient</button>
                                            <button type="button" id="clearGrad" class="btn btn-warning mt-1 mb-3 rounded px-4 py-2">Clear Gradient</button>
                                            
                                        </div>
                                        
                                        </div></div>
                                    
                                    <div class="clipArea">
                                
                                        <div class="row m-auto">
                                             <div class="form-group w-100 mt-4">
                                                <select class="form-control pr-5 clipArtsSelector" id="exampleFormControlSelect1">
                                                  <option id="weddingOption" value="wedding">Wedding</option>
                                                  <option value="party">Celebrations</option>
                                                  <option value="birthday">Birthday</option>
                                                  <option value="mother">Mother's Day</option>
                                                  <option value="watercolor">Water Color</option>
                                                  <option value="floral">Floral</option>
                                                  <option value="boarders">Boarders</option>
                                                
                                                </select>

                                            </div>
                                            <div class="weddingArts">
                                                <div class="row mr-1">
                                                     <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng34.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng35.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng36.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng37.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng38.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng40.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng41.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng42.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng43.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng44.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng45.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng46.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng.png"> 
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng1.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng2.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng14.png">
                                                    </div>
                                                     <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng10.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng11.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng12.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng13.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng15.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng3.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng4.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng5.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng6.png">
                                                    </div> 
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng7.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng8.png">
                                                    </div>
                                                   
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng16.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng17.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng18.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng19.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng20.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng21.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng22.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng23.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng24.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng25.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng26.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng27.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng28.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng29.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng30.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng32.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng33.png">
                                                    </div>
                                                   
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng39.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng47.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng49.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng50.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng51.png">
                                                    </div>
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng52.png">
                                                    </div>
                                                    <div class="col-6 py-1  m-auto m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wdng48.png">
                                                    </div>
                                                   
                                                    
                                                    
                                                    
                                                </div>
                                        </div>
                                            <div class="birthdayArts">
                                                <div class="row mr-1">
                                                    <div class="col-6 py-1 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd-2.png"> 
                                                    </div>
                                                    <div class="col-6 m-auto" >
                                                        <img class="artimg img-fluid" src="images/clipArts/bd-3.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd23.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd15.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd16.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd17.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd18.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd25.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd27.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd29.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd28.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd26.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd30.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd31.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd32.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd33.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd34.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd35.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd36.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd37.png">
                                                    </div>
                                                    <div class="col-6  m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd38.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd39.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd40.png">
                                                    </div>
                                                    <div class="col-6 m-auto ">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd40.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd41.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd42.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd43.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd44.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd45.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd46.png">
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd1.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd2.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd4.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd5.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd6.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd7.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd8.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd9.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd10.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd11.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd12.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd13.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd14.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd19.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd20.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd21.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/bd22.png">
                                                    </div>
                                                    
                                                </div>
                                        </div> 
                                            <div class="motherArts">
                                                <div class="row mr-1">
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr1.png"> 
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr2.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr3.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr4.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr5.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr6.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr7.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr8.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr9.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr10.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr11.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr12.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr13.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr14.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr15.png">
                                                    </div>
                                                    <div class="col-6 py-2">
                                                        <img class="artimg img-fluid" src="images/clipArts/mthr16.png">
                                                    </div>
                                                    
                                                </div>
                                        </div>  
                                            <div class="partyArts">
                                                <div class="row mr-1">
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/party.png"> 
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty40.png"> 
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty41.png"> 
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty13.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty14.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty15.png">
                                                    </div>
                                                   
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty25.png">
                                                    </div>
                                                   
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty24.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty27.png">
                                                    </div>
                                                   
                                                    
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty12.png">
                                                    </div>
                                                   
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty21.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty22.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty23.png">
                                                    </div>
                                                    
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty28.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty26.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty29.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty30.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty31.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty33.png">
                                                    </div> 
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty34.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty35.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty36.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty37.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty39.png"> 
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty38.png">
                                                    </div>
                                                     <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty18.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty19.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty20.png">
                                                    </div>
                                                     <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty8.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty9.png">
                                                    </div>
                                                     <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty6.png">
                                                    </div>
                                                     <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty1.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty2.png">
                                                    </div>
                                                   
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty4.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty10.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/prty11.png">
                                                    </div>
                                                    
                                                    
                                                </div>
                                        </div> 
                                            <div class="watercolorArts">
                                                <div class="row mr-1">
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc1.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc4.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc3.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc5.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc6.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc7.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc8.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc9.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc10.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc11.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc12.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc13.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc14.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/wc15.png">
                                                    </div>
                                                
                                                </div>
                                            
                                            </div>
                                            <div class="floralArts">
                                                <div class="row mr-1">
                                                    
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr1.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr2.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr3.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr4.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr5.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr8.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr7.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr9.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr10.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr11.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr13.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr12.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr14.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr15.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr16.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr19.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr17.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr18.png">
                                                    </div>
                                                    <div class="col-6 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/flr25.png">
                                                    </div>
                                                  
                                                </div>
                                        </div> 
                                            <div class="boardersArts">
                                                <div class="row mr-1">
                                                    
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr1.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr2.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr3.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr4.png">
                                                    </div>
                                                    
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr6.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr7.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr8.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr9.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr10.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr11.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr12.png">
                                                    </div>
                                            
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr16.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img class="artimg img-fluid" src="images/clipArts/brdr17.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img  class="artimg img-fluid" src="images/clipArts/brdr13.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img  class="artimg img-fluid" src="images/clipArts/brdr18.png">
                                                    </div>
                                                    <div class="col-6 py-2 m-auto">
                                                        <img  class="artimg img-fluid" src="images/clipArts/brdr19.png">
                                                    </div>
                                                   
                                                  
                                                </div>
                                        </div> 
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="textCustArea">
                                    
                                        
                                    <div id="firstPage"><h5 class="text-white py-3 text-center">Custom Text</h5>
                                    
                                       <textarea id="myText"class="form-control m-auto" placeholder="Write your text"></textarea>
                                        <button  id="add" class="btn my-3 w-100">Add</button>
                                        <button  id="next" class="btn  w-100">Next</button>
                                        </div>
                                       <div id="secPage">
                                            <h5 class="text-white text-center py-3">Alter Text</h5>
                                            <div id="secScroll">
                                                <div class="row">
                                            
                                                <div class="col-12 text-white mt-4 mb-2">Font Family</div>
                                                <div class="col-12 text-center px-0"><input class="form-control w-75" id="font" type="text" /></div>
                                            </div>
                                            <div class="row">
                                            
                                                <div class="col-12 text-white mt-4 mb-2">Font Size</div>
                                                <div class="col-12 m-auto"><input id="fSize" class="form-control w-50 m-auto" type="number" value="80"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-white mt-4 mb-2">Background Color</div>
                                                <div class="col-12 m-auto"><input type="color" id="bgColor" class="form-control px-1 w-50 m-auto bgcolorPicker"></div>
                                            </div>
                                               <div class="row">
                                                <div class="col-12 text-white mt-4 mb-2">Font Color</div>
                                                <div class="col-12 m-auto"><input type="color" id="fColor" class="form-control px-1 w-50 m-auto fcolorPicker"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-white mt-4 mb-2">Line Height</div>
                                                <div class="col-12 m-auto">
                                                    <select id="lineHeight" class="form-control w-50 m-auto">
                                                        <option value="0.7">0.7</option>
                                                        <option value="1">1</option>
                                                        <option value="1.3">1.3</option>
                                                        <option value="1.5">1.5</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-12 text-white mt-4 mb-2">Stroke color</div>
                                                <div class="col-12 m-auto"><input type="color" id="sColor" class="form-control px-1 w-50 m-auto scolorPicker"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-white mt-4 mb-2">Stroke width</div>
                                                <div class="col-12 m-auto">
                                                    <select id="sWidth" class="form-control w-50 m-auto">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <button  id="back" class="btn my-4 w-100">Back</button>
                                            </div>
                                        
                                       </div>
                                       
                                        
                                        </div>
                                        <div class="uploadArea">
                                    <h5 class="text-white py-3">Upload an Image</h5>
                                    <div class="row pl-2">
                                      <form>
                                          <div class="form-group">
<!--                                            <label for="exampleFormControlFile1" class="text-white"></label>-->
                                            <input type="file" class="form-control-file rounded" id="imgLoader">
                                          </div>
                                        </form>
                                        </div></div>
                                    </div>
                                    
                                    
                                
                                </div>
                            </div>
                        
                        </div>
                    <div class="col-7">
                        <div class="row"> 
                            
                            
                            <div class="col-12">
                            
                            <div class="row">

                                <div class="col-8">
                                
                            <div class="col-12 py-3 text-center">
                                <i id="undo" class="fas fa-undo-alt editIcons"></i><span class="pl-1 pr-3">Undo</span>
                                <i id="redo" class="fas fa-redo-alt editIcons"></i><span class="pl-1 pr-3">Redo</span>
                                <i class="fas fa-trash editIcons cleanEditor"></i><span class="pl-1 pr-3">Clean Editor</span>
                            </div>
                                <!--<div class="workSheet bg-light"></div>-->
                                <canvas id="c" width="528" height="384" class="workSheet mb-4" ></canvas></div>

                                <div class="col-4 text-center mt-5">
                                <div id="editTextList" class="position-fixed">
                                <div class="row textOptions">
                                   <div class="col-12">
                                   
                                <button id="leftLine" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="align-left">
                                  <i class="fa fa-align-left"></i>
                                </button>
                                   <button id="centerLine" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="align-center">
                                  <i class="fa fa-align-center"></i>
                                </button>
                                                   
                               <button id="rightLine" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="align-right">
                                  <i class="fa fa-align-right"></i>
                                </button>
                                   </div>
                                    <div class="col-12">
                                
                                <button id="underLine" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="underline">
                                 <i class="fa fa-underline"></i>
                                </button>
                                <button id="lineThrough" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="line-through">
                                 <i class="fa fa-strikethrough"></i>
                                </button>
                                <button id="overLine" type="button" class="btn btn-light py-1 px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="overline">
                                 O
                                </button>
</div>
                               <div class="col-12">
                                   <button id="bold"type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="bold">
                                  <i class="fa fa-bold"></i>
                                </button>
                                <button id="italic" type="button" class="btn btn-light px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="italic">
                                 <i class="fa fa-italic"></i>
                                   </button></div>
                               <!--
                                <button id="noLine"type="button" class="btn btn-light py-1 px-3 my-1" data-toggle="tooltip" data-placement="bottom" title="remove line decoration">
                                N
                                </button>
                                
 <button id="copybtn" type="button" class="btn btn-light py-1 px-3 my1" data-toggle="tooltip" data-placement="bottom" title="Copy">
C                              </button> 
-->
                                </div>
                                
        
                           </div></div>
                                </div>
                            </div>
                            <div class="col-12 pt-4 m-auto text-center save_download">
<!--                                <button>Preview</button>-->
                                <button class="btn btn-outline-danger mx-1" id="save" >Save</button> 
                                <button class="btn btn-outline-danger mr-1" id="download">Download</button>
                                
                                <div class="alert alert-success w-50 my-2 text-white" role="alert">Card Saved</div>   
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-1 mt-5">
                        <div class="options text-center position-fixed ">
                            <div class="row">
                                <div class="col-12">
                                   <a href="javascript:void(0)" class="eraser" data-toggle="tooltip" data-placement="bottom" title="Eraser"> <i class="fas fa-eraser text-white fa-lg my-3 "></i> </a>    
                                </div>
                                <div class="col-12">
                                   <a href="javascript:void(0)" class="copy" data-toggle="tooltip" data-placement="bottom" title="Copy"> <i class="far fa-copy text-white fa-lg my-3"></i></a>
                                </div>
                                <div class="col-12">
                                   <a href="javascript:void(0)" class="locked" data-toggle="tooltip" data-placement="bottom" title="Lock Layer"> <i class="fas fa-lock text-white fa-lg my-3"></i></a>
                                </div>    
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="unlocked" data-toggle="tooltip" data-placement="bottom" title="Un-lock Layer"><i class="fas fa-lock-open text-white fa-lg my-3 mb-4"></i></a>
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="forward" data-toggle="tooltip" data-placement="bottom" title="Bring Forward">
                                        <img class="img-fluid text-white my-3 w-25" src="images/clipArts/forwardAsset%201-8.png"></a>
                                </div>
                                <div class="col-12">
                                   <a href="javascript:void(0)" class="backward" data-toggle="tooltip" data-placement="bottom" title="Bring Backward"> <img class="img-fluid text-white my-3 w-25" src="images/clipArts/bring-backAsset%202-8.png"> </a>
                                   
                                  
                                </div>    
                            
                            </div>
                            
                            
                            
                        
                        </div>
                    </div>
                </div>
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

        <script src="js/editor.js"></script>
        <script src="js/fabric.min.js"></script>
        <script src="js/FileSaver.min.js"></script>
        <script src="js/jquery.fontselect.min.js"></script>
    

    
      
    </body>
</html>