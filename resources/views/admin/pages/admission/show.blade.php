@extends('admin.master')

@section('page-title', 'Show school  history ')



@section('main-content')

</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h2>Student Name : {{ $admission->name }}</h2>

</div>
<div class="card-block user-desc">

	<div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="col-md-5">
              <div class="form-group">
                  <h4 style="text-align:right;">Student name </h4>
                  <h4 style="text-align:right;">Class Name </h4>
                  <h4 style="text-align:right;">Department </h4>
                  <h4 style="text-align:right;">Gender</h4>
                  <h4 style="text-align:right;">Religion</h4>
                  <h4 style="text-align:right;">Date of Birth</h4>
                  <h4 style="text-align:right;">Father Name</h4>
                  <h4 style="text-align:right;">Father Occupation</h4>
                  <h4 style="text-align:right;">Mother Name</h4>
                  <h4 style="text-align:right;">Mother Occupation</h4>
                  <h4 style="text-align:right;">Gurdian Number</h4>
                  <h4 style="text-align:right;">Payment Process</h4>
                  <h4 style="text-align:right;">Payment Amount</h4>
                  <h4 style="text-align:right;">Payment Status</h4>
                  <h4 style="text-align:right;">Address</h4>
              </div>
          </div>
      <div class="col-md-5">
          <div class="form-group">
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->name}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->class}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->department}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->gender}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->religion}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->birthDate}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->father}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->father_occupation}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->mother}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->mother_occupation}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->mobile}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->payment}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->amount}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->status}}</h4>
              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; {{ $admission->address}}</h4>
          </div>
      </div>
          
      </div>
	 </div>

<div class="edit-desc">
<div class="col-md-12">

</div>
<div class="text-center">
<a href="{{ url('/admission/all') }}" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Back</a>
<a href="{{url('/admission/'.$admission->id.'/edit')}}" class="btn btn-info waves-effect waves-light m-r-20 m-t-20">Edit</a>
</div>

</div>
</div>
</div>
</div>
</div>


@endsection

