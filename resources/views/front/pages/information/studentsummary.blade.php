@extends('front.master')

@section('main-title','All Student Information')

@section('content-heading')
    <h2 style="text-align:center;color:blue">All Student Information</h2><br>
@endsection

@section('main-content')

    <div class="row">
    	<div class="col-md-12 col-sm-12 col-lg-12">

    		<h2 class="priName">Total Student :{{ $studentsummary->count() }} </h2>
    	</div>
    </div>

@endsection