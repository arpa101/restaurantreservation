<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title> 
        <link href="css/home/rhome.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body onload="slider()">
     <!----------------------------------1st Section------------------------------->

     <!--------------------------------------NAVBAR--------------------->

     <nav class="navbars">
     <div class="social">
            <ul>
            <li><a href="#"><i class="bi bi-search"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></i></a></li>
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-google"></i></i></a></li>
           </ul>
     </div>
    </nav>

     <nav class="navbar">
    
        <div class="left">
            <p>Bengal Restaurant</p>
        </div>
        <div class="center">
        <ul>
        <li><a href="" ><i class="bi bi-house-door" class="active">Home</i></a></li>
        <li><div class="nav">
           <div class="drop"> <a href=""><i class="bi bi-view-list">Menu</i>
            
            </div>
        </li>
        <li><a href="#"><i class="bi bi-people">About Us</i></a></li>
        <li><a href="#"><i class="bi bi-telephone">contact Us</i></a></li>
        </ul>
        </div>
    </nav>


            <!-------------------------1st section--------------------------------->
            <div class="container">
        <div class="banner">
            <div class="slider">
                <img src="https://media.istockphoto.com/photos/cooking-nd-seasoning-spices-border-on-black-slate-background-picture-id953140058?b=1&k=20&m=953140058&s=170667a&w=0&h=cFHmDfsARUpEkPd55UlMklVcXHs0dyRoENAQawCISr8=" id="slideimg">
            </div>
            <div class="overlay">
           
            <div class="content">
                <h1>Welcome To Bengal Restaurent<h1>
                <h4>Craving For Food Order now<h4>
            </div>
            <div>
            <a href=""><button type="submit" class="reg" name="submit"  onclick="openPopup()" >Reserve a Table</button></a>
            </div>
            </div>
        </div>
        <!--------------------Popup----------------------->
         
        
     @extends('Home/footer') 
     @extends('Home/contact')
     @extends('Home/review')
     @extends('Home/booktable')
     @extends('Home/happetizer')
     @extends('Home/about')
    </div>
    
     



<!------------------------Script---------------------------->
        <script>
            var slideimg = document.getElementById("slideimg");
            var images = new Array(
                "https://media.istockphoto.com/photos/cooking-nd-seasoning-spices-border-on-black-slate-background-picture-id953140058?b=1&k=20&m=953140058&s=170667a&w=0&h=cFHmDfsARUpEkPd55UlMklVcXHs0dyRoENAQawCISr8=",
                "https://www.rossorestaurant.at/wp-content/uploads/2015/05/italian-food-background.jpg",
                "https://t4.ftcdn.net/jpg/02/84/46/89/360_F_284468936_x9z7JcG7abktWKd750bP2CcjCqeZyHtm.jpg",
            );
            var len = images.length;
            var i = 0;
            function slider(){
                if (i > len-1){
                    i=0;
                }

                slideimg.src=images[i];
                i++;
                setTimeout('slider()',1000);
            }


            
        </script>


<script>
     let popup=document.getElementById("popup");

function openPopup(){
    open-popup.classList.add("open-popup"); 
} 

function closePopup(){
    open-popup.classList.remove("open-popup"); 
} 
    
    </script>


<!------------------------Script---------------------------->
    <body>

    
</html>