<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
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
 <body>
  <br />
  <div class="container box">
   <h3 align="center"> Login to  first demo</h3><br />

   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Logout</a></div>
     <div class="alert alert-primary success-block">
    <form action="{{url('form1')}}" method="post" >
                    @csrf
                    <label>Enter Title</label>
                    <input type="text" name="title" ><br>
                    <label>Enter Description</label>
                    <input type="text" name="description" ><br>
                    <input type="submit" value='Add Post'></form>
                    </div>
    
                    <a href="{{ url('/show') }}">show Post</a></div>


   @else
    <script>window.location = "/main";</script>
   @endif
   
   <br />
  </div>
 </body>
</html>