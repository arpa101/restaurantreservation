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
    
               
        <div class="container">
        @if(session('success'))

        <div class="alert alert-success">

          {{ session('success') }}

        </div> 

    @endif
            
       @yield('menuappetizer')
       @yield('menulunch')
       @yield('menudinner')
       @yield('menudessert')
       @yield('menudrink')
       @yield('content')
       @yield('scripts')

       
    </body>
</html>