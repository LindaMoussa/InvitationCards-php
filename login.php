

  <div class="login-card">
      <h2>Log In</h2> 
      <form action="checkLogin.php" method="post"> 
<!--      <form action="" method="post"> -->
          <div class="form-group">
               <input name="useremail" class="form-control" placeholder="UserEmail" required/>
          </div>
          <div class="form-group">          
              <input name="userpassword" class="form-control my-3" placeholder="Password" type="password" required/>   
          </div>
          <span class="error"> <? php session_start(); echo $_SESSION['wrongEorP']; $_SESSION["favanimal"] = "cat"; echo $_COOKIE['wrongMsg']; ?></span>
          <div class="form-group">          
              <input type="hidden" name="errormsg" class="form-control my-3" value="<?php echo $_POST['errormsg']; ?>"/>   
          </div>

<!--
          <div class="alert alert-danger" id="wrongEorP" role="alert">
              Wrong Email or Password !
              Please Try Again.

            </div>
-->
          <div class="form-group"> 
              <label class="form-check-label check">
                  <input class="form-check-input" type="checkbox"><span class="pl-4">Keep me Logged in</span>
                </label>
              
          </div>       
          <div><button type="submit" name="submit" class="btn btn-two mt-2">LogIn</button> </div>      
      
      </form>  
      <span class="error"> <? php session_start(); echo $_SESSION['wrongEorP']; $_SESSION["favanimal"] = "cat"; echo $_COOKIE['wrongMsg']; ?></span>
 </div>

<style> #wrongEorP{
    display: none;

    }
</style>




    

<!--
<style> #wrongEorP{
    display:block;

    }
</style>
-->


