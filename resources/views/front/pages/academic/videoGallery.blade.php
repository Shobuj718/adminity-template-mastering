@extends('front.master')

@section('main-title','Video Gallery   ')

@section('header-section')

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
 -->
@endsection

@section('style-section')
<style type="text/css">
 
.video {
    height: 0;
    position: relative;
    padding-bottom: 56.25%; /* Если видео 16/9, то 9/16*100 = 56.25%. Также и с 4/3 - 3/4*100 = 75% */
}
.video iframe {
    position: absolute;
    left: 0;
    top: 0;
    width: 232px;
    height: 152px;
}
</style>
@endsection


@section('content-heading')
    <h2 style="text-align:center;color:blue">Video Gallery </h2><br>
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-4">
    <div class="col py-2">
          <div class="video"><iframe src="https://www.youtube.com/embed/AWdA7hdP4ZA?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="col py-2">
        <div class="video"><iframe src="https://www.youtube.com/embed/I39RKjerJss?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  </div>
  </div>
  <div class="col-md-4">
    <div class="col py-2">
          <div class="video"><iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  </div>
  </div>
      
      
      
</div>

@endsection

@section('footer-section')

@endsection


