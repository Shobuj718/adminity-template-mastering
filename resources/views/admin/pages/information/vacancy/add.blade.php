@extends('admin.master')

@section('page-title', 'Add Vacancy List Information')

@section('header-section')
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/icon/icofont/css/icofont.css">


<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/pages/j-pro/css/demo.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/pages/j-pro/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/pages/j-pro/css/j-pro-modern.css">
 -->
@endsection

@section('main-content')


 <div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Add Vacancy List Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/vacancy/store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group {{ $errors->has('className') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Class Name </label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('className') }}" class="form-control" name="className" id="className" placeholder="Enter  Class Name  ">
								@if($errors->has('className'))
									<span class="help-block">
										<strong>{{ $errors->first('className') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('totalSeats') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Total Seats </label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('totalSeats') }}" class="form-control" name="totalSeats" id="totalSeats" placeholder="Enter Total Seats number ">
								@if($errors->has('totalSeats'))
									<span class="help-block">
										<strong>{{ $errors->first('totalSeats') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('emptySeats') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Empty Seats </label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('emptySeats') }}" class="form-control" name="emptySeats" id="emptySeats" placeholder="Enter Empty Seats number ">
								@if($errors->has('emptySeats'))
									<span class="help-block">
										<strong>{{ $errors->first('emptySeats') }}</strong>
									</span>
								@endif
							</div>
						</div>


						<div class="form-group {{$errors->has('details') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Details</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="details" class="form-control"  placeholder="Enter details ">{{ old('details') }}</textarea>
								@if($errors->has('details'))
									<span class="help-block">
										<strong>{{ $errors->first('details') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Image Upload</label>
							<div class="col-sm-10">
								<input type="file" name="image" class="form-control" onchange="readURL(this);">
								<img id="image" src="#" alt=" " />
							</div>
						</div>

						
					
						<div class="form-group row">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" id="submit" class="btn btn-primary submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				
				<div class="card-block">
					<div class="j-wrapper j-wrapper-640">
						<form action="" method="post" class="j-pro" id="j-pro" novalidate>
							<div class="j-content">
								<div class="j-unit">

						<div class="card-header">
						    <h2 style="text-align:center">Add Vacancy List Information</h2>
								
							@if(Session::has('error'))
						        @include('admin.includes.errors')
						    @endif
						    @if(Session::has('success'))
						        @include('admin.includes.success')
						    @endif
					   </div>
							    	<label class="j-label">Name</label>
										<div class="j-input">
										    <label class="j-icon-right" for="name"><i class="icofont icofont-ui-user"></i></label>
							        	    <input type="text" placeholder="e.g. John Doe" id="name" name="name">
							   		    </div>
								</div>


							


								<div class="j-unit">
									<label class="j-label">Message</label>
									<div class="j-input">
										<textarea placeholder="your message..." spellcheck="false" name="message"></textarea>
									</div>
								</div>


								<div class="j-response"></div>

							</div>

							<div class="j-footer">
									<button type="submit" class="btn btn-primary">Send</button>
							</div>

						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div> -->



@endsection


@section('footer-section')

<!-- 
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/j-pro/js/jquery.j-pro.js"></script>


<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/j-pro/js/custom/contact-form.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY0mgQROcL8aXp-abr432Xx8DMeItHkzM"></script>
<script src="{{ asset('admin') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script> -->


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