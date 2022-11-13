<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Page</title>
        @yield('hmenucss') 
        <link href="css/home/hmenu.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
       
            <div class="linkbox">
                <div class="text"><h2>Our Menu</h2></div>
                <div class="line"></div>

             
                </div>
            
       @yield('appetizer')
       @yield('lunch')
       @yield('dinner')
       @yield('dessert')
       @yield('drinks')
    </body>
</html>