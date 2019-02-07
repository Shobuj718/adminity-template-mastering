@extends('front.master')

@section('main-title','Vice Principal Information')

@section('content-heading')
    <h2 style="text-align:center;color:blue">Vice Principal Message</h2><br>
@endsection

@section('style-section')
	<style type="text/css">
		.priName{
			text-align:center;
		}
		
		.tnoimage{
			align:center;
			width: 120px;
			height: 120px;
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
    		<h2 class="priName">{{ $data->name }}</h2>
    		<p class="priSpeach">{{ $data->message }}</p>
    	</div>
    </div>

@endsection