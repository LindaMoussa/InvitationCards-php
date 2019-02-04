
<form onSubmit="return validate();" action="checkRegister.php" method="post"> 	
	
            <div class="form-group"> 
                <input name="username" class="form-control my-3" type="text" placeholder="UserName" required/>
            </div>
    
            <div class="form-group" id="mail">
                <input name="usermail" class="form-control my-3" type="email" placeholder="Name@example.com" required/>
                <div class="w-75 px-2 mt-2 alert alert-danger">Wrong e-mail</div>
            </div>
    
            <div class="form-group">
                <input name="userpassword" class="form-control my-3 "id="pass" type="password" placeholder="Password" required/>
            </div>
    
            <div class="form-group">
                <input name="confirmpass" class="form-control my-3" id="confirmpass" type="password" placeholder="Confirm Password" required/>
            </div>
            <div class="alert alert-danger" id="wrongpassAlert" role="alert">
              Wrong Password !
              Please Try Again.

            </div>
    
            <button type="submit" class="btn">Sign Up</button>
    
            <div id="loginLinkClick" class="loginLink pt-5 text-secondary">If you have an account : <a>Click Here </a></div>

		</form>

<style> 
    .wrongpassAlert{
        display: none; 
    } 
</style>

<script>
    function validate()
    {

       var pass= document.getElementById('pass').value;
       var conpass= document.getElementById('confirmpass').value;          
   
        if(pass != conpass)
       {
           document.getElementById('wrongpassAlert').style.display = "block";
//           alert("Passwords does not match");
           
           return false;
       } 
   
    }
    
   
    </script>