@extends('layouts/resdashboard')
@section('showcss')
<style>
body{
    background-color:#fff;
    }
        .container{
    margin-left: 270px;
        
    }
    
    .container .table{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 16px;
        width: 100%;
        
    }
    
    .table td, .table th{
        border: 1px solid #ddd;
        padding: 8px;
    }
    .table thead tr{
        background-color:  rgba(14, 17, 172, 0.815);
        color: #fff;
        text-align: left;
        
    }
    
    .table tbody tr:nth-child(even){background-color: #f3f3f3}
    
    .btn{
        background-color: rgba(20, 11, 141, 0.815);
        height: 40px;
        text-decoration:none;
        color:#fff;
        font-weight: bold;
        border-color: white;
    }
    </style>
@endsection
@section('showdatad')


     <form action="" method="get">
	<div class="container">
        <div> 
            <input type="text" name="search" class="search" placeholder="Search">
            <button class="btn">Search</button>
        </div>
        <div class="success"></div>
  
		<table class="table">
			<thead>
        <tr>
            <th>ID</th>
            <th class="category">Category</th>
            <th>Sub Category</th>
            <th>Item Name</th>
            <th>ingredients</th>
            <th>Price</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
             @foreach($data as $item)
             <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['category']}}</td>
                <td>{{$item['subcategory']}}</td>
                <td>{{$item['itemname']}}</td>
                <td>{{$item['ingredients']}}</td>
                <td>{{$item['price']}}</td>
               
                
                <td><img src="images/{{$item['foodimage']}}" width="100px" height="100px" alt="">
                </td>
               
               <td>
                <form action="{{ route('res.delete', $item->id)}}" method="get">    
                        <button class="btn"style="width:70px;"></i>Delete</a></button>
                       </td>
                    </form>
             </tr>
             @endforeach
        </tbody>

    </table>
</div>

</form>


@endsection