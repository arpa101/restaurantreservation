@extends('layouts/dashboard')
@section('createrestaurantd')
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
       border: 0.1px solid rgb(238, 222, 238);
       box-shadow: 10px 5px 10px rgba(224, 53, 196, 0.1);
       
      
    }

    .text{
       
        width: 50%;
        height: 10%;
        margin-left: 25%;
        margin-top: 3%;

    }
    .text-danger{
        color:red;
    }

    .text h1{
        text-align: center;
        color: rgba(89, 11, 141, 0.815);
    }
   

    .inputbox{
        margin-top:5%;
        background-color: white;
        margin-left: 10%;
        width: 50%;

    }

    .resName{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        cursor: pointer
    }

    .resName:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .location{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        cursor: pointer
    }

    .location:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .email{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        cursor: pointer
    }

    .email:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .password{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        cursor: pointer
    }

    .password:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .add{
        margin-top: 3%;
        margin-left: 50%;
        width: 30%;
        height: 7%;
        border-radius: 10%;
        background:  rgba(89, 11, 141, 0.815);
        font-size: 18px;
        font-weight: bold;
        color: white;

    }



    
</style>
@endsection

@section('addrestaurant')

<div class="container">
    
 <div class="box">
    <div class="text"> 
        <h1>Create Restaurant</h1>
        </div>
    <div class="inputbox">
        <form action="showdata" method="POST"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="id" name="id">
            <input type="text" id="resName"class="resName" name="resName" placeholder="Restaurant name"><br><br>
            @if($errors->has('resName'))
						<span class="text-danger">{{ $errors->first('resName') }}</span>
					@endif
            <input type="text" class="location" name="location" Placeholder="Location" ><br><br>
            @if($errors->has('location'))
						<span class="text-danger">{{ $errors->first('location') }}</span>
					@endif
            <input type="text" class="email" name="email" placeholder="Email" ><br><br>
            @if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
            <input type="password" class="password"  name="password" placeholder="Password"><br><br>    
            @if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
            <input type="file" class="fileName" name="fileName" id="file" style="margin-left:30%;" class="file"><br><br>
            <button type="submit" class="add" name="add"  >ADD</button>
        </form>
    </div>
 </div>
<div>

@endsection