@extends('admin.master')

@section('page-title', 'Admin Control Panel ')

@section('main-content')

<div class="page-body">
<div class="row">

<div class="col-xl-3 col-md-6">
<div class="card bg-c-yellow update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">
<h4 class="text-white">Teacher Info</h4>
<h6 class="text-white m-b-0">View Teacher Info</h6>
 </div>
<div class="col-4 text-right">
<canvas id="update-chart-1" height="50"></canvas>
</div>
</div>
</div>
<div class="card-footer">
<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">
<h4 class="text-white">Student Info</h4>
<h6 class="text-white m-b-0">View Student Info</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-2" height="50"></canvas>
</div>
</div>
</div>
<div class="card-footer">
<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-pink update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">
<h4 class="text-white">Commitee Info</h4>
<h6 class="text-white m-b-0">View Commitee Info</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-3" height="50"></canvas>
</div>
</div>
</div>
<div class="card-footer">
<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-lite-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">
<h4 class="text-white">Governing Cou:</h4>
<h6 class="text-white m-b-0">All Info</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-4" height="50"></canvas>
</div>
</div>
</div>
<div class="card-footer">
<p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
</div>
</div>
</div>


<div class="col-xl-4 col-md-6">
<div class="card social-card bg-simple-c-blue">
<div class="card-block">
<div class="row align-items-center">
<div class="col-auto">
<i class="feather icon-mail f-34 text-c-blue social-icon"></i>
</div>
<div class="col">
<h6 class="m-b-0">Other Info</h6>
<p></p>
 <p class="m-b-0">Testing</p>
</div>
</div>
</div>
<a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card social-card bg-simple-c-pink">
<div class="card-block">
<div class="row align-items-center">
<div class="col-auto">
<i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
</div>
<div class="col">
<h6 class="m-b-0">Other Info</h6>
<p></p>
<p class="m-b-0">Testing</p>
</div>
</div>
</div>
<a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
</div>
</div>
<div class="col-xl-4 col-md-12">
<div class="card social-card bg-simple-c-green">
<div class="card-block">
<div class="row align-items-center">
<div class="col-auto">
<i class="feather icon-instagram f-34 text-c-green social-icon"></i>
</div>
<div class="col">
<h6 class="m-b-0">Other Info</h6>
<p></p>
<p class="m-b-0">Testing</p>
</div>
</div>
</div>
<a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
</div>
</div>

</div>
</div>
@endsection