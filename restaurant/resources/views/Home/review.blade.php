<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title> 
        <link href="css/home/review.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
       
        <div class="reviewcontainer">
        <div class="retext">
        <div class="text"><h2>Reviews</h2></div>
        <div class="line"></div>
    </div> 
            <div class="swiper">
                <div class="menuimg">
                    <img src="https://t3.ftcdn.net/jpg/02/57/29/88/360_F_257298837_B8n4pIKuxTVd2O9FyZAr44b4jU5FGnCH.jpg">
                </div>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide" >
                    <div class="reviewbox">
                        <div class="topbox">
                            <img src="https://st3.depositphotos.com/6672868/15049/v/450/depositphotos_150490554-stock-illustration-user-profile-group-outline-icon.jpg">
                                <h1>Alex</h1>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                              <div class="toptext">
                               <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum minus obcaecati cum eligendi perferendis magni dolorum ipsum magnam, sunt reiciendis natus. Aperiam!</h2>
                              </div>
                        </div>
                    </div>
                    
                  </div>
                  <!-- Slides -->
                    <!-- Slides -->
                    <div class="swiper-slide" >
                      <div class="reviewbox">
                          <div class="topbox">
                              <img src="https://st3.depositphotos.com/6672868/15049/v/450/depositphotos_150490554-stock-illustration-user-profile-group-outline-icon.jpg"><br><br>
                                  <h1>Lariza</h1>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i>
                                <div class="toptext">
                                 <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, nam. Earum nobis eligendi, dignissimos consequuntur blanditiis natus. Aperiam!</h2>
                                </div>
                          </div>
                      </div>
                      
                    </div>
                    <!-- Slides -->
                     
                  
                  

                </div>
                
              
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
  
         loop: true,
  
       

         // Navigation arrows
         navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          },

  
           });
        </script>
    </body>
    </html>