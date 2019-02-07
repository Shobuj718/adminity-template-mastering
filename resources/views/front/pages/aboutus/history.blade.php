@extends('front.master')

@section('main-title','History of Institution ')

@section('content-heading')
    <h2 style="text-align:center;color:blue">History of Institution </h2><br>
@endsection

@section('style-section')
	<style type="text/css">
		.priName{
			text-align:center;
		}
		.priAddress{
			text-align:center;
		}
		.tnoimage{
			align:center;
			width: 150px;
			height: 150px;
		}
		.priSpeach{
			text-align: justify;
		}
	</style>
@endsection

@section('main-content')

    <div class="row">
    	<div class="col-md-12 col-sm-12 col-lg-12">
    		<p><img class="img-circle tnoimage img-center" src="{{url($data->image ? $data->image : '')}}"   alt="No Image" /></p>
    		<h2 class="priName">{{ $data->summary }}</h2>
    		<p class="priSpeach">{{ $data->details }}</p>
    	</div>
    </div>

@endsection