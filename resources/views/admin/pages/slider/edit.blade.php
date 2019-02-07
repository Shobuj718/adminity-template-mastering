@extends('admin.master')

@section('page-title',' Update Slider image Information')

@section('main-content')


	<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Slider Image Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/slider/update/'.$slider->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Principal Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $slider->title }}" class="form-control" name="title" id="title" >
								@if($errors->has('title'))
									<span class="help-block">
										<strong>{{ $errors->first('title') }}</strong>
									</span>
								@endif
							</div>
						</div>

						
						<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Image Upload</label>
							<div class="col-sm-10">
								<input type="file" name="image" id="image" class="form-control">
								<img class="img-responsive" src="{{url($slider->image ? $slider->image : '')}}" width="80px" height="80px" alt="No Image">
							</div>

							@if($errors->has('image'))
								<span class="help-block">
									<strong>{{ $errors->first('image') }}</strong>
								</span>
							@endif

						</div>
					
						<div class="form-group row">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary submit">Submit</button>
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


<!-- <script type="text/javascript">
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
 -->


@endsection