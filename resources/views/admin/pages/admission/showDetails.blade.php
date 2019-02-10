@extends('admin.master')

@section('page-title', 'Show Apply Form')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Show Apply Form</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="container">
				                  <div class="row">

				                      <div class="col-md-8 col-md-offset-2">
				                          <div class="form-group">
				                              <h3 style="text-align:center;">Admission Form Show </h3>
				                            
				                          </div>
				                      </div>
				                  </div>


				              </div>

				            <hr>

		              <div class="container">
		                  <div class="row">
		                  	<form action="{{ url('/admissionRegister') }}">
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
		                                  <h4 style="text-align:right;">Payment Status</h4>
		                                  <h4 style="text-align:right;">Address</h4>
		                              </div>
		                          </div>
		                      <div class="col-md-5">
		                          <div class="form-group">
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['name']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['class']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['department']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['gender']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['religion']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['birthDate']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['father']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['father_occupation']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['mother']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['mother_occupation']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['phone']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['gender']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['gender']; ?></h4>
		                              <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $data['address']; ?></h4>
		                          </div>
		                      </div>
		                          
		                      </div>
		                    </form>
		                  </div>
		              </div>

				                <hr/>
			</div>
		</div>
	</div>
</div>

@endsection


@section('footer-section')



<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

@endsection