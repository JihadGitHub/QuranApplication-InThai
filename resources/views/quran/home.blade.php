@extends('quran.nav')
@section('content')

<style>
      @font-face {
        font-family:'Uthmani' ;
        src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
      }
     .arabic{
         font-family: 'Uthmani', serif;
         font-size: 23px;
         font-weight: normal;
         direction: rtl;
         padding: 0 5px;
         margin: 0;
         color: rgb(207,181,59);
     }
     .latin{
        font-family:  serif;
        font-size: 17px;
        font-weight: normal;
        direction: ltr;
        padding: 0;
        margin: 0;
     }
      .arabic_number {
        font-size: 28px;
        font-weight: normal;
      }
        .cautions {
        
        font-size: 13px;
        font-weight: normal;
        direction: ltr;
        padding: 0 5px;
        margin: 0;
        color: red;

    }

       
     .customBtn {
      
      color: rgb(207,181,59);
      height: 90px;
       width:240px; 
  margin-top: 30px;
  margin-right: 10px;
  margin-left: 10px;
  margin-bottom: 10px;
  border: 1px solid rgb(207,181,59);
  border-radius: 30%;
     }

     .customBtn:hover {
      background-color: #583759;
     }

     .thumbnail {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
     }

      </style>


<div style="background-color:#36013F;" class="thumbnail">
  @foreach($datasurahs as $datasurah)     
<div class="">
 <a href="{{ route('arabic', $datasurah) }}">
  <button type="buttom" class="btn customBtn" >
  <p class="arabic" >{{ $datasurah->surah_arab}}</p>
  <span class="text-white" >{{ $datasurah->th_name}}</span></button></a>
  </div>
 <br>
        @endforeach
 <br>
</div>
 @endsection
