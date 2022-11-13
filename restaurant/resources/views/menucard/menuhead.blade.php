<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Page</title>
        @yield('menucardcss') 
        @yield('contentcss')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="css/menucard/cards.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <nav class="navbar">
    
            <div class="left">
                <p>Bengal Restaurant</p>
            </div>
            <div class="center">
            <ul>
            <li><a href="{{route('home')}}" ><i class="bi bi-house-door" class="active">Home</i></a></li>
            <li><a href=""><i class="bi bi-person">Chef</i></a></li>
            
              
            <li><a href="#"><i class="bi bi-people">About Us</i></a></li>
            <li><a href="#"><i class="bi bi-telephone">contact Us</i></a></li>
            <li><a href="#"><i class="bi bi-box-arrow-right">Log Out</i></a></li>
            @php $total = 0 @endphp

            @foreach((array) session('cart') as $id => $details)

                @php $total +=  $details['quantity'] @endphp

            @endforeach
            
            </ul>
            <a href="{{route('cart')}}" class="floating-btn"><i class="bi bi-cart3"></i><small> {{  $total }}</small><span>View Cart</span></a>
            </div>
        </nav>
       
            <div class="linkbox">
                
               

                <nav class="links">
    
                    <div class="moptions">
                    <ul>
                    <li><a href="{{route('home.appetizer')}}" class="myLink"data-pathname="/appetizer">Appetizer</a></li>
                    <li><a href="{{route('home.lunch')}}"class="myLink">Lunch Set Menu</a></li>
                    <li><a href="{{route('home.dinner')}}"class="myLink">Dinner Set Menu</a></li>
                    <li><a href="{{route('home.dessert')}}"class="myLink">Dessert</a></li>
                    <li><a href="{{route('home.drink')}}"class="myLink">Drinks</a></li>
                    </ul>
                    </div>
                    </nav>
                </div>
            
       @yield('menuappetizer')
       @yield('menulunch')
       @yield('menudinner')
       @yield('menudessert')
       @yield('menudrink')
       @yield('content')


   <script>
  $(document).ready(function() {

// Get current page URL
var url = window.location.href;

// remove # from URL
url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

// remove parameters from URL
url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

// select file name
url = url.substr(url.lastIndexOf("/") + 1);

// If file name not avilable
if(url == ''){
   url = 'index.html';
}

// Loop all menu items
$('.moptions li').each(function(){

   // select href
   var href = $(this).find('a').attr('href');

   // Check filename
   if(url == href){

      // Add active class
      $(this).addClass('active');
   }
});
});

    </script>
    </body>
</html>