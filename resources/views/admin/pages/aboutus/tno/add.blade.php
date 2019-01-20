@extends('admin.master')

@section('page-title', 'Add TNO Message ')

@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Add TNO Message</h2>
					<span  style="text-align:center">Enter  <code>Email and Password,</code> if you <code>Login</code> next time in this site.</span>
				</div>

				@if(Session::has('error'))
		            @include('admin.includes.errors')
		        @endif
		        @if(Session::has('success'))
		            @include('admin.includes.success')
		        @endif

				<div class="card-block">
					<form  method="post"  action="{{url('/tno')}}" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">TNO Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" placeholder="Enter TNO Name " required>
								<span class="messages"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" value="{{ old('email') }}" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
								<!-- <span class="messages"></span> -->
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" value="{{ old('password') }}" class="form-control" id="password" name="password" placeholder="Password input">
							<span class="messages"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Message</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="message" class="form-control" placeholder="Default textarea"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Image Upload</label>
							<div class="col-sm-10">
								<input type="file" name="image" id="image" class="form-control">
							</div>
						</div>
					
						<div class="form-group row">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary ">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('footer-section')
<!-- <script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/bootstrap/js/bootstrap.min.js"></script> -->



<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/form-validation/validate.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/form-validation/form-validation.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/pcoded.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/vartical-layout.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
@endsection