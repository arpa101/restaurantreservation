@extends('Home/hmenu')

@section('hmenucss')
<style>
   /* *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
}*/

.menucontainer{
    
    width: 100%;
   
    align-items: center;
    justify-content: center;
  
}

.mbox{
  
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,50fr));
    grid-gap:2px;
}

.sliderbox{
    background-color: rgb(247, 242, 246);
    position: relative;
    width: 100%;
    height: 100%;
    margin-top: 3%;
    overflow: hidden;
}

.sliderbox img{
    width: 100%;
    height: 100%;
    
}


.mtext{
    width: 100%;
    height: 40%; 
    background-color: black;
    box-sizing: border-box;
    position: relative;
    text-align: center;
    bottom: 20%;
    opacity: 70%;
}

.mtext h1{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ;
    font-size: 25px;
    color: white;
 
}

.mtext h2{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ;
    font-size: 15px;
    color: white;
    visibility: hidden;
    opacity: 0%;
}


.sliderbox:hover{
    cursor: pointer;
}

.sliderbox:hover .mtext{
    position: absolute;
    bottom: 0%;
    width: 100%;
    height: 30%; 
}

.sliderbox img:hover{
    width: 100%;
    height: 100%; 
 
}

.sliderbox:hover .mtext h2{
opacity: 1;
visibility: visible;
}

.showmenu{
    background-color: rgb(15, 15, 15);
    text-align: center;
    align-items: center;
    width: 100%;
    height: 20%;
    opacity: 80%;
    margin-top: 1%;
}



.show{
    background-color: transparent;
     margin-top: 4%;
     width: 10%;
     height: 30%;
     opacity: 100%;
     cursor: pointer;
     border: 2px solid white;
     font-size: 20px;
     color: white;
     

}

.show a{
    color: white;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
}
.show:hover  {
    width: 15%;
    background-color: blueviolet;
    
    
}



</style>
@endsection

@section('appetizer')
    

        <div class="menucontainer">
            
            <div class="mbox">
                @foreach($data as $item)
                <!----START slide--->
                <div class="sliderbox">
                    <img src="images/{{$item['foodimage']}}" class="mimg"> 
                    <div class="mtext">
                        <h1>{{$item['itemname']}}</h1><br>
                        <h2>{{$item['price']}}</h2>
                    </div> 
                </div>
                @endforeach
            </div>
            
            <div class="showmenu">
                <button type="submit" class="show"><a href="{{route('home.appetizer')}}">Detail Menu</a></button>
            </div>
            
        </div>
        
        @endsection