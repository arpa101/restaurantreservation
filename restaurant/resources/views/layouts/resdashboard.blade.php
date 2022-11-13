<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant Dash Board</title> 
        @yield('resinfo')
        @yield('showcss')
        @yield('addmenucss')
        <link href="css/dashboard1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
    <!----------------------------------------Page----------------------------------->
  
              
    <div class="header">

     <h3 class="head">Restaurant</h3><br><hr><br><br>
     <a href=""><i class="bi bi-person-circle">My Profile</i></a><br>
     <a href="{{route('showinfo')}}"><i class="bi bi-info-circle">Show information</i></a><br>
     <!---<a href=""><i class="bi bi-people-fill"></i></a><br>--->
     <a href="{{route('addmenu')}}" id="addmenu"><i class="bi bi-menu-button-wide">Add Menu</i></a><br>
     <a href="{{route('showmenu')}}"id="showmenu"><i class="bi bi-list">Show Menu</i></a><br>
     <a href="{{route('bookings')}}"><i class="bi bi-journal-album">Show Bookings</i></a><br>
     <a href="#"><i class="bi bi-gear-fill">Setting </i></a><br>
     <a href="#"><i class="bi bi-box-arrow-right">Logout</i></a><br>

    </div>

    <!----------------------------------------Page Finished----------------------------------->
    @yield('rresinfo')
    @yield('showdatad')
    @yield('addmenu')
    @yield('booking')
</body>
</html>