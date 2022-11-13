@extends('layouts/resdashboard')

@section('addmenucss')
<style>

    .container{
        position: fixed;
        width: 100%;
        height: 100%;
        margin-left: 15%;
    }
    .box{
        background-color: white;
        margin-left: 10%;
        width: 60%;
        height: 80%;
        margin-top: 5%;
        border: 0.1px solid rgb(236, 241, 252);
        box-shadow: 10px 5px 10px rgba(224, 53, 196, 0.1);
    }

    .text{
        width: 50%;
        height: 10%;
        margin-left: 25%;
        margin-top: 3%;
    }

    .text h1{
        text-align: center;
        color: rgb(62, 65, 240);
    }
   

    .inputbox{
        margin-top:5%;
        background-color: white;
        margin-left: 10%;
        width: 50%;

    }

        
    
    
     .catagory{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .catagory:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }
    
    .subcatagory{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .subcatagory:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .itemname{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .itemname:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .ingredients{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .ingredients:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .price{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .price:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .add{
        margin-top: 3%;
        margin-left: 50%;
        width: 30%;
        height: 7%;
        border-radius: 10%;
        background: rgb(72, 115, 233);
        box-shadow: 10px 15px 20px whitesmoke;
        font-size: 18px;
        font-weight: bold;
        color: black;
        cursor: pointer;
        border: 1px solid rgb(88, 130, 245);
    }

    .add:hover{
        background: rgb(23, 7, 112);
        font-size: 18px;
        font-weight: bold;
        color: white;
        box-shadow: none;
    }   
</style>
@endsection

@section('addmenu')
<div class="container">  
 <div class="box">
    <div class="text"> 
        <h1>Add Menu</h1>
        </div>
    <div class="inputbox">
        <form  action="{{route('menu.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="id" name="id">
            <select class="catagory" id="catagory" name="category">
                <option value="Select Catagory" > Select Catgory</option>
                <option value="Appetizer" name="category"> Appetizer</option>
                <option value="Main Menu" name="category"> mainmenu</option>
                <option value="Dessert" name="category"> Dessert</option>
                <option value="Drinks" name="category"> Drinks</option>
            </select><br><br>

            <select class="subcatagory" id="subcatagory" name="subcategory">
                <option value="Select Sub Catagory" > Select Sub Catgory</option>
                <option value="Lunch" name="subcategory"> Lunch</option>
                <option value="Dinner"name="subcategory"> Dinner</option>
                <option value="none"name="subcategory"> None</option>
            </select>
          <br><br>
            <input type="text" class="itemname" name="itemname" placeholder="Name" ><br><br>
            <textarea class="ingredients"  name="ingredients" placeholder="ingredients"></textarea><br><br>    
            <input type="text" class="price"  name="price" placeholder="price"><br><br>
            <input type="file" class="fileName" name="fileName" id="file" style="margin-left:30%;" class="file"><br><br>
            <button type="submit" class="add" name="add"  >ADD</button>
        </form>
    </div>
 </div>
</div>

<script>

</script>
@endsection