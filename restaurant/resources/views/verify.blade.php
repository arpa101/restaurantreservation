<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Varify Code</title> 
        <link href="css/verify.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
     <div class="vcontainer">
        <div class="vcontact">
        <div class="vright">
            <div class="vloginbox">
                <div class="vtext">
                    <h1>Varify OTP</h1><br>
                    <h2>Please Enter 4 digit code sent to your email</h2><br>
                </div>
                <form class="vform" action="{{route('otp.code')}}" method="get">
                  <div class="vcol">
                    <input type="text" class="vnum" name="vnum"><br><br>
                    @if($errors->has('vnum'))
							<span class="text-danger" style="color:red">{{ $errors->first('vnum') }}</span>
					
						@endif
                    <button type="submit" class="ve" name="ve">Verify</button><br>
                  </div>
               </form>
          </div>
        </div>
       </div>
     </div>
</body>
</html>