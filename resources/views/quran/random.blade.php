@extends('quran.nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}">
    
</head>
   
<style>
    .highlight{ 
  background:#00FF00; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}

.randomBtn {
   background-color: #36013F;
    margin: 10px 5px; 
    color: #fff; 
    width: 80px; 
                 
}

.randomBtn:hover {
   opacity: 0.8;
   color: #000;
}
</style>

<body>
    <div class="container">
       <div class="row">
          <div class="col-md-12" style="margin-top:40px">
          <br>
          <br>
             <body>
             <form action="{{ route('web.random') }}" method="GET">
                <div class="form-group">
                 <button type="submit" class="btn randomBtn ">สุ่ม</button>
  
                </div>
                
             </form>
           
             <hr>
             <br>
  
          </div>
       </div>
    </div>
</body>
</html>
@endsection