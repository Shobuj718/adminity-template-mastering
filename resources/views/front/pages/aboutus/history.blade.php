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
	</style>History of Institution
@endsection

@section('main-content')

    <div class="row">
    	<div class="col-md-12 col-sm-12 col-lg-12">
    		<p><img class="tnoimage img-center" src="uploads/tnoImage/Md Rakib Hasanasdf-1547620150.green-nature-wallpaper.jpg"  alt="No Image" /></p>
    		<h2 class="priName">History of Institution </h2>
    		<p class="priAddress">Saghata pilot high school, Saghata</p><br>
    		<p class="priSpeach">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    	</div>
    </div>

@endsection