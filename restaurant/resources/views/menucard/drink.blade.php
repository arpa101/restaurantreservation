@extends('menucard/menuhead')

@section('menucardcss')
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
}
.text h2{
    margin-top: 3%;
    font-size: 30px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.line{
    width: 150px;
    height: 1vmin;
    background: purple;
    margin: 10px auto;
    margin-bottom: 3%;
    border-radius: 30px;
}

.menucontainer{
  position: absolute;
    width: 100%;
    height: 100%; 
    align-items: center;
    justify-content: center;
  
}
.menucardbox{
    display: grid;
    grid-template-columns: repeat(3,20%);
    gap: 130px;
}
.menucard{

    background-color: white;
    width: 110%;
    height:90%;
    margin-left: 50%;
    
    box-shadow: 5px 5px 20px rgb(63, 62, 62);
}



.mimgbox{
    background-color: white;
    width: 86%;
    height: 50%;
    padding: 10px 17px;
}

.mimgbox img{
    width: 100%;
    height: 100%;
}

.menutext{
    margin-left: 5%;
}
.rating i{
    color: rgb(221, 132, 16);
}



.foodname h1{
    font-size: 20px;
    font-weight: bold;
   
    font-family: 'Times New Roman', Times, serif;
}

.foodname h2{
    font-size: 16px;
    color: rgb(78, 77, 77);
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
}

.foodname h3{
    font-size: 20px;
    color: purple;
    
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.add{
    margin-left: 40%;
    margin-top: -8%;
    width: 50%;
    height: 10%;
    color: white;
    background-color: red;
    border-radius: 5%;
    cursor: pointer;

}

.add:hover{
    background-color: rgb(9, 211, 9);
    border: 2px solid green;
    width: 55%;
    color: black;
    font-weight: bold;
}
</style>
    
@endsection

@section('menudrink')
    

       
        <div class="menucontainer">
            <div class="ctextbox">
            <div class="text"><h2>Drinks</h2></div>
            <div class="line"></div>
        </div>
      
            <div class="menucardbox">
            <!---------------------------------------------->
            @foreach($data as $item)
             <div class="menucard">
               
                <div class="mimgbox">
                    <img src="images/{{$item['foodimage']}}" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                   
                    <h1>{{$item['itemname']}}</h1>
                    <h2>{{$item['ingredients']}} </h2><br>
                    <h3>{{$item['price']}} Tk</h3>
                    <button class="add" "><a href="{{ route('add.to.cart', $item->id) }}"style="color:white;" >Add To Cart</a></button>
                    
                </div>
               
             </div>
            
            </div>
            
             <!---------------------------------------------->


            

             
             @endforeach 
        </div>
       
        
        </div>
        @endsection    
 