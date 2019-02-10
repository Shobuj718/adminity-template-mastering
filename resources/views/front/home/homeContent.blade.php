@extends('front.master')

@section('main-title', 'School Name Here')

@section('style-section')
<style type="text/css">
  

</style>

@endsection


@section('main-content')
<div class="row">

<!-- start add option -->
  <div class="col-md-2">

     <div class="slick_slider">
     
                          
              <div class="single_iteam"> 
                <a href="http://ehsannews.com/" target="_blank"> <img src="{{ asset('front') }}/images/green4.jpg" alt=""></a>
                
              </div>
             
          
        </div>
  </div>
  <!-- end add option -->

  <div class="col-md-8">

     <div class="slick_slider">
     
        @foreach($slider as $data)
            
              
              <div class="single_iteam"> <a href="#"> <img src="{{url($data->image ? $data->image : '')}}" alt=""></a>
                <div class="slider_article">
                </div>
              </div>
             
        @endforeach
          
        </div>
  </div>

  <!-- start add option -->
  <div class="col-md-2">

	   <div class="slick_slider">
     
                          
              <div class="single_iteam"> 

                <a href="http://ehsannews.com/" target="_blank"> <img src="{{ asset('front') }}/images/green3.jpg" alt=""></a>
                
              </div>
             
          
        </div>
  </div>
  <!-- end add option -->

</div>
<div class="row">
      
    <div class="col-lg-12 col-md-1 col-sm-12">
        <div class="slick_slider">
     
                          
              <div class=""> 
                <!-- <a href="http://ehsannews.com/" target="_blank"> <img src="{{url($data->image ? $data->image : '')}}" alt=""></a> -->

                <a href="http://ehsannews.com/" target="_blank"> <img class="asas" src="{{ asset('front') }}/images/green.jpg" alt=""></a>
                
              </div>
             
          
        </div>
      </div>
    </div>

		<div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              
              <li style="color:white;" class="active">School Information </li>
            </ol>
            

            <div class="row">

              <div class="col-md-12">
                <h1 style="font-size:22px;text-align:center;"><p style="color:#D083CF"> 

                      {{ $history->summary }}

                </p>   </h1>
                <hr>
                  <div class="single_page_content">
                <p style="text-align:justify;">

                      {{ $history->details }}
                 
                </p>

                </div>
                  
              </div>

            </div>


            <div class="row">

            <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF"> সভাপতির বাণীঃ</p>   {{ $president->name }}  </h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="{{url($president->image ? $president->image : '')}}" alt="">
               
              <p style="text-align:justify;">{{ $president->message }} </p>
              <!--<h5> <a style="color:#D083CF" href="view/front/ourspeak/presidentspeak.php">more...</a> </h5>  -->

              </div>
            </div>

              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF"> প্রধান শিক্ষকের বাণীঃ</p>   {{ $principal->name }}    </h1>
               <br>
                
                <div class="single_page_content"> <img class="img-center img-rounded" src="{{url($principal->image ? $principal->image : '')}}" alt="">

              <p style="text-align:justify;">{{ $principal->message }}
              <!-- <h5><a style="color:#D083CF" href="view/front/ourspeak/principalspeak.php">আরও...</a> </h5> -->
              </p>

                         
            </div>
              </div>
              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF;"> সহঃ প্রঃ শিক্ষকের   বাণীঃ</p> {{ $viceprincipal->name }} </h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="{{url($president->image ? $president->image : '')}}" alt="">
              <p  style="text-align:justify;">{{ $viceprincipal->message }}

              <!-- <h5>
              <a style="color:#D083CF" href="view/front/ourspeak/assistantPrincipalspeak.php"><b>আরও...</a> </h5>  -->
                
              </p>
                         
            </div>
            </div>

        <!-- start add option -->
        <div class="col-lg-12 col-md-1 col-sm-12">
          <h3>This is add option title name </h3>
            <div class="slick_slider">
         
                              
                  <div class=""> 

                    <a href="http://ehsannews.com/" target="_blank"> <img class="asas" src="{{ asset('front') }}/images/green4.jpg" alt=""></a>
                    
                  </div>
                 
              
            </div>
        </div>
        <!-- end add option -->

            </div>
            
            
          </div>
        </div>

@endsection