@extends('front.master')

@section('main-title','TNO Information')

@section('content-heading')
    <h2 style="text-align:center;color:blue">TNO Message</h2><br>
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
    		<p><img class="img-circle tnoimage img-center" src="{{url($tno->image ? $tno->image : '')}}"   alt="No Image" /></p>
    		<h2 class="priName">{{ $tno->name }}</h2>
    		<p class="priSpeach">{{ $tno->message }}</p>
    	</div>
    </div>

@endsection