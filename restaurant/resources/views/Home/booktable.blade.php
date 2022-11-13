<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About us </title> 
        <link href="css/home/booktable.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
    </body>
    <div class="tablecontainer">
        <div class="text"><h2> Reserve Table</h2></div>
         <div class="line"></div>
        <div class="tableboximg">
            <img src="https://media.istockphoto.com/photos/cozy-restaurant-for-gathering-with-friends-picture-id1159992039?b=1&k=20&m=1159992039&s=170667a&w=0&h=prGK7E_h62IuZFQNtnCDPhqmG6y1-MV-l_NiJhuAl7Q=">
                <div class="tablebox">
                    <form method="get" action="{{route('book')}}">
                        <p><input type="email"  id="emaill" name="emaill" placeholder="E-mali" ></p><br>
                        <p><input type="number"  id="num" name="num" placeholder="Number of People" ></p><br>
                        <p><input type="time"  id="time" name="time" placeholder="Time" ></p><br>
                        <p><input type="date"  id="date" name="date" placeholder="Date" ></p>
                      <button type="submit" class="reserve" name="reserve" > Reserve</button>
               </form>
                </div>
        </div>
    
        
    </div>

</html>