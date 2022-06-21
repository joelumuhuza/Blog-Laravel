<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <button><a href="{{url('Select')}}">View data</a></button>
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   </style>
    </head>
    <body class="antialiased">
            <div class="container box" >
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <h1>Registration of Item</h1><br>
                <form action="{{url('form1')}}" method="post" >
                    @csrf
                    <label>Enter Title</label>
                    <input type="text" name="title" >
                    <label>Enter Description</label>
                    <input type="text" name="description" >
                    <input type="submit" value='Add Item'>
</form>

          </div>

            
            
        </div>
    </body>
</html>
