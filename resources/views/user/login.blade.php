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
      <title> Login</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper animation-jump">
      	<!-- you can disable the animation by removing the class "animation-jump" -->
         <div class="title">
            LOGIN 
         </div>
         <form action="#">
            <div class="field">
               <input type="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
      
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
   </body>
</html>
