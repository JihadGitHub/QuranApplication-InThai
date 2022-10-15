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
</style>

<body>
    <div class="container">
       <div class="row">
          <div class="col-md-12" style="margin-top:40px">
          <br>
          <br>
             <body>
             
             @if(isset($texts))

               <table class="table table table-bordered ">
                   <thead>
                   <tr class="table-success">
       
                <th style="width:10%" scope="col">ผลการสุ่ม</th>
                   </tr> 
                </thead>
                <tbody>
                       
                   @if(count($texts) > 0)
                              @foreach($texts as $text)
                              <tr>
                                    <td>{{$text->text }}</td>
                             </tr>
                           @endforeach
                           @else

                          <tr><td>No result found!</td></tr>
                          @endif
                        </tbody>
               </table>
               </body>


              

             @endif
          </div>
       </div>
    </div>
</body>
</html>
@endsection