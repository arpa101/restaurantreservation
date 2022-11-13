<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title> 
        <link href="css/home/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="fcontainer">
            <div class="fbox">
                <div class="row">    
                    <div class="col">
                     <h4>Gallery</h4>
                        <div class="full-img" id="fullimgBox">
                         <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug=" id="fullimg">
                         <div class="cross"><i class="bi bi-x-circle-fill" onclick="closefullimg()"></i></div>
                         </div>
                         <div class="images">
                             <img src="https://media.istockphoto.com/photos/table-top-view-of-spicy-food-picture-id1316145932?b=1&k=20&m=1316145932&s=170667a&w=0&h=feyrNSTglzksHoEDSsnrG47UoY_XX4PtayUPpSMunQI=" onclick="openfullimg(this.src)">
                             <img src="https://wallpaperaccess.com/full/767033.jpg" onclick="openfullimg(this.src)">
                             <img src="https://media.istockphoto.com/photos/fresh-tiramisu-cake-white-background-picture-id1134778606?k=20&m=1134778606&s=170667a&w=0&h=6bB7_0Ous8Ylir8y_13LVSJXsDdkMAiOH3dUuz5_Vic=" onclick="openfullimg(this.src)">
                             <img src="https://images3.alphacoders.com/190/190135.jpg" onclick="openfullimg(this.src)">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8XdeAYmW2gLGMBN0OXdvknRJd9EO9XA8-j2iSHh8VWoEhF84-wx0dQ-TlASmSOwr7b8s&usqp=CAU"  onclick="openfullimg(this.src)">
                             <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" onclick="openfullimg(this.src)">
                         </div>
                          
                     
                     </div>
     
                <div class="col">
                 <h4>Reservation</h4>
                 <ul>
                     <li><a href="#">Phone:12345678</a></li>
                     <li><a href="#">Tell:1234</a></li>
                   </ul>
                 
               </div>
                    <div class="col">
                 <h4>Open Hours</h4>
                 <ul>
                   <li><a href="#">Friday:Closed</a></li>
                   <li><a href="#">Sataurday-Wednesday: 10AM-10PM</a></li>
                   <li><a href="#">Thursday:10AM-6PM</a></li>
                 </ul>
               </div>
     
              
     
               <div class="col">
                 <h4>Contact With US</h4>
                 <ul>
                   <li><a href="#">Address : Bashundhara R/A, Dhaka</a></li>
                   <li><a href="#"> Phone No : 12345678</a></li>
                   <li><a href="#">Email : bengalrestaurant@gmail.com</a></li>
                 </ul>
               </div>
     
                 </div>
             </div>





            </div>
        </div>

        <!--------------------script---------------------------->
        <script>
            var fullimgBox=document.getElementById("fullimgBox");
        var fullimg=document.getElementById("fullimg");

        function openfullimg(pic){
           fullimgBox.style.display="flex";
           fullimg.src=pic;
        }

        function closefullimg() {
           fullimgBox.style.display="none";
        }
       </script>
   <!--------------------script---------------------------->
    </body>
    </html>
