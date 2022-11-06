<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="150 words">
      <meta name="robots" content="index,follow">
      <meta name="copyright" content="company name">
      <style>
         
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #008B50); */
}

::selection{
  background: #008B50;
  color: #fff;
}

.wrapper{
  width: 380px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #000;
  margin-bottom: -20px;
  user-select: none;
  /*border-radius: 15px 15px 0 0;*/
  /*background-color: #008B50;*/
  /*background: linear-gradient(-135deg, #c850c0, #008B50);*/
}

.wrapper form{
  padding: 10px 30px 50px 30px;
}

.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}

.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}

.wrapper form .field input:focus,
form .field input:valid{
  border-color: #008B50;
}

.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}

form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #008B50;
  background: #fff;
  transform: translateY(-50%);
}

form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}

form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}

.remember-me{
	background-color: #008B50;
}

form .content input{
  width: 15px;
  height: 15px;
  background: red;
}

form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}

form .content .pass-link{
  color: "";
}

form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  /*background: linear-gradient(-135deg, #c850c0, #008B50);*/
  background-color: #008B50;
  transition: all 0.3s ease;
}

form .field input[type="submit"]:active{
  transform: scale(0.95);
}

form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}

form .pass-link a,
form .signup-link a{
  color: #008B50;
  text-decoration: none;
}

form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}

.animation-jump {
    position: relative;
    -webkit-animation: animation-jump 2s ease-in-out infinite;
    animation: animation-jump 2s ease-in-out infinite;
}

.animation-bg {
    -webkit-animation: animation-bg 25s ease-in-out infinite;
    animation: animation-bg 25s ease-in-out infinite;
}

@-webkit-keyframes animation-jump {
    0% {
        top: 3px;
    }
    50% {
        top: -3px;
    }
    100% {
        top: 3px;
    }
}

@keyframes animation-jump {
    0% {
        top: 3px;
    }
    50% {
        top: -3px;
    }
    100% {
        top: 3px;
    }
}

@-webkit-keyframes animation-bg {
    0% {
        background-position: top;
    }

    50% {
        background-position: bottom;
    }
    100% {
        background-position: top;
    }
}

@keyframes animation-bg {
    0% {
        background-position: top;
    }

    50% {
        background-position: bottom;
    }
    100% {
        background-position: top;
    }
}

.title p {
	font-size: 7px;
	margin-top: -50px;
	color: #008B50;
}

.alert {
  padding: 5px;
  font-size: 5px;
  border-radius: 50px;
  margin-bottom: 15px;
}

.alert-danger {
  background-color: #f44336;
  color: white;
}

.alert-success {
  background-color: green;
  color: white;
}


 /* Media Query for Mobile Devices */ 
@media (max-width: 480px) { 

.wrapper {
  width: 300px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

form .content {
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 10px;
  align-items: center;
  justify-content: space-around;
}

form .content .checkbox {
  display: flex;
  align-items: center;
  justify-content: center;
}

.remember-me {
	background-color: #008B50;
}

form .content input {
  width: 10px;
  height: 10px;
  background: red;
}

form .content label {
  color: #262626;
  user-select: none;
  padding-left: 5px;
}

} 

          
/* Media Query for low resolution  Tablets, Ipads */ 
@media (min-width: 481px) and (max-width: 767px) { 

.wrapper {
  width: 300px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

form .content {
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 10px;
  align-items: center;
  justify-content: space-around;
}

form .content .checkbox {
  display: flex;
  align-items: center;
  justify-content: center;
}

.remember-me {
	background-color: #008B50;
}

form .content input {
  width: 10px;
  height: 10px;
  background: red;
}

form .content label {
  color: #262626;
  user-select: none;
  padding-left: 5px;
}

 } 


/* Media Query for Tablets Ipads portrait mode */ 
@media (min-width: 768px) and (max-width: 1024px){ 

   .wrapper {
  width: 300px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

form .content {
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 10px;
  align-items: center;
  justify-content: space-around;
}

form .content .checkbox {
  display: flex;
  align-items: center;
  justify-content: center;
}

.remember-me {
	background-color: #008B50;
}

form .content input {
  width: 10px;
  height: 10px;
  background: red;
}

form .content label {
  color: #262626;
  user-select: none;
  padding-left: 5px;
}

} 

          
 /* Media Query for Laptops and Desktops */ 
@media (min-width: 1025px) and (max-width: 1280px){ 

.wrapper{
  width: 380px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #000;
  margin-bottom: -20px;
  user-select: none;
  /*border-radius: 15px 15px 0 0;*/
  /*background-color: #008B50;*/
  /*background: linear-gradient(-135deg, #c850c0, #008B50);*/
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #008B50;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #008B50;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
.remember-me{
	background-color: #008B50;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}

} 

          
/* Media Query for Large screens */ 
@media (min-width: 1281px) { 

.wrapper{
  width: 380px;
  background: #fff;
  /*border-radius: 15px;*/
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #000;
  margin-bottom: -20px;
  user-select: none;
  /*border-radius: 15px 15px 0 0;*/
  /*background-color: #008B50;*/
  /*background: linear-gradient(-135deg, #c850c0, #008B50);*/
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #008B50;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #008B50;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
.remember-me{
	background-color: #008B50;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
        
} 
      </style>
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
         <form action="/login" method="POST">
            @csrf
            <div class="field">
               <input type="email" required>
               <label>Email Address</label>
               @error('email')
                   <p style="color: #ca190c">{{$message}}</p>
               @enderror
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
               @error('password')
               <p style="color: #ca190c; margin:auto;">{{$message}}</p>
           @enderror
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
