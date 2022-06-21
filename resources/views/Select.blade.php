<html>
   
<head>
<title>view on database
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   </style></head>
<body>
@if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Logout</a><br><a href="{{ url('/main') }}">back to home</a></div>
    <div>
        
        <H5> Selected from database </h5>
        <br>
        <table>
            <tr><th> identity : </th><th> title :</th><th> description :</th><th> Action :</th></tr>
        @foreach($query as $user)
        
        <tr><td><p>
            {{$user->id}} 

        </p><br></td><td>
        <p>
          {{$user->title}} 

        </p><br></td><td>
        <p>
            {{$user->description}} 

        </p></td><td>
        <a href='{{route('delete',$user->id)}}'>Delete</a></td></tr>
       

        @endforeach
</table>

        @else
    <script>window.location = "/main";</script>
   @endif
        
</div>
</body>


    </html>