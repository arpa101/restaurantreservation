@extends('layouts/dashboard')
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
        background-color:  rgba(89, 11, 141, 0.815);
        color: #fff;
        text-align: left;
        
    }
    
    .table tbody tr:nth-child(even){background-color: #f3f3f3}
    
    .btn{
        background-color: rgba(89, 11, 141, 0.815);
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
            <th>Restaurant name</th>
            <th>location</th>
            <th>email</th>
            <th>image</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
             @foreach($data as $item)
             <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['resName']}}</td>
                <td>{{$item['location']}}</td>
                <td>{{$item['email']}}</td>
                <td><img src="images/{{$item['Rimage']}}" width="100px" height="100px" alt="">
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