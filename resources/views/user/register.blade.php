<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="150 words">
      <meta name="robots" content="index,follow">
      <meta name="copyright" content="company name">
      
    <!-- Bootstrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <!-- Custom CSS -->
      <title> Team work</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper animation-jump">
      	<!-- you can disable the animation by removing the class "animation-jump" -->
         <div class="title">
            REGISTER 
            <p>It's completely free</p>
         </div>
         <form action="#" onsubmit="return:form_val();">
         	<div class="alert alert-danger" role="alert">
         	Error messages on registration fail 
         	</div>
             <div class="alert alert-success" role="alert">
         	Success messages on registration
         	</div>
         	<div class="field">
               <input type="text" required>
               <label>Full Name</label>
            </div>
            <div class="field">
               <input type="text" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="tel" required>
               <label>Mobile Number</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Confirm Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me" required>
                  <label for="remember-me">Accept Terms and conditions</label>
               </div>
               <div class="pass-link">
                  <a href="#">Terms & privacy</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Register">
            </div>
            <div class="signup-link">
               Already have an account? <a href="#">Login</a>
            </div>
         </form>
      </div>
      
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="script.js"></script>
      
   </body>
</html>
