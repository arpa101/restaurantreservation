<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Passwords</title> 
        <link href="css/forget.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
     <div class="container">
        <div class="contact">
        <div class="right">
    <!---------------------Forget Password--------------------------------------------->
            <div class="loginbox" >
                <div class="text">
                    <h1>Forgot Password?</h1><br>
                    <h2>Enter your email and we will send you a code to reset your password </h2><br>
                </div>
                <form method="get" class="form" action={{route('forget.mail')}}>
                  <input type="text" id="email" class="email" name="email"placeholder=" Email"><br><br>
                  @if($errors->has('email'))
							<span class="text-danger" style="color:red">{{ $errors->first('email') }}</span>
					
						@endif
                  <button type="submit" class="sub" name="submit" onclick="openvbox()">Send Code</button><br>
                <div class="back">
                 <a href="#"><i class="bi bi-caret-left-fill" >Back to Login</i></a>
                </div> 
               </form>
          </div>
  
        </div>
       </div>
     </div>


      <!----------------------------------------Script----------------------------------------->
</body>
</html>