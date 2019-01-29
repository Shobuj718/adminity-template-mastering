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
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/tno')}}" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">TNO Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" placeholder="Enter TNO Name ">
								@if($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('email') ? 'has-error':'' }} row">
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" value="{{ old('email') }}" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">

	                            <span id="error_email"></span>

								@if ($errors->has('email'))
	                                <span class="help-block">
	                                    <strong>{{$errors->first('email')}}</strong>
	                                </span>
	                            @endif

							</div>
							
														
						</div>
						<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Mobile</label>
							<div class="col-sm-10">
								<input type="mobile" value="{{ old('mobile') }}" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number ">
								<span id="mobile_error"></span>
								@if($errors->has('mobile'))
									<span class="help-block">
										<strong>{{ $errors->first('mobile') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('password') ? 'has-error':'' }} row">
							<label class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" value="{{ old('password') }}" class="form-control" id="password" name="password" placeholder="Password input">
								@if ($errors->has('password'))
	                                <span class="help-block">
	                                    <strong>{{$errors->first('password')}}</strong>
	                                </span>
	                            @endif
							</div>
							
						</div>

						<div class="form-group {{$errors->has('message') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Message</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="message" class="form-control"  placeholder="Default textarea">{{ old('message') }}</textarea>
								@if($errors->has('message'))
									<span class="help-block">
										<strong>{{ $errors->first('message') }}</strong>
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

@endsection


@section('footer-section')


<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/form-validation/validate.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/form-validation/form-validation.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/assets/js/script.js"></script>



<!-- <script src="{{asset('admin/validate/validation.js')}}"></script> -->



<script type="text/javascript">
	$(document).ready(function(){

		$('#email').blur(function(){
			var error_email = '';
			var email = $('#email').val();
			var _token = $('input[name="_token"]').val();
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!filter.test(email)){
				$('#error_email').html('<label class="text-danger">Invalid Email Address !!!<label>');
				$('#email').addClass('has-error');
				$('#submit').attr('disabled', 'disabled');
			}
			else{
				$.ajax({
					url:"{{ url('/EmailAvailable') }}",
					method:"POST",
					data:{email:email, _token:_token},
					success:function(result){
						if(result == 0){
							$('#error_email').html('<label class="text-success">Email Address Available</label>');
							$('#email').removeClass('has-error');
							$('#submit').attr('disabled', false);						
						}
						else{
							$("#error_email").html('<label class="text-danger">Email Already exist, Choose another email Address !!!</label>');
							$('#email').addClass('has-error');
							$('#submit').attr('disabled', 'disabled');
						}
					}

				});
			}
		});

		$('#mobile').blur(function(){
			var mobile_error = '';
			var mobile = $('#mobile').val();
			var _token = $('input[name="_token"]').val();
			/*
				Allowed mobile number sample, +8801812598624, 008801812598624, 01812598624, 01712598624, 01672598624, 01919598624, 01312345678
			*/
			var filter = /(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/;

			if(!filter.test(mobile)){
				$('#mobile_error').html('<label class="text-danger">Invalid Mobile Number !!!</label>');
				$('#mobile').addClass('has-error');
				$('#submit').attr('disabled', 'disabled');
			}
			else{
				$.ajax({
					url:"{{ url('/mobileAvailable') }}",
					method:"POST",
					data:{mobile:mobile, _token:_token},
					success:function(result){
						if(result == 0){
							$('#mobile_error').html('<label class="text-success">Mobile number available</label>');
							$('#mobile').removeClass('has-error');
							$('#submit').attr('disabled', false);
						}
						else{
							$('#mobile_error').html('<label class="text-danger">Mobile number already exist, choose another number !!!<label>');
							$('#mobile').addClass('has-error');
							$('#submit').attr('disabled', 'disabled');
						}
					}

				});
				
			}
		});

	});
</script>
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