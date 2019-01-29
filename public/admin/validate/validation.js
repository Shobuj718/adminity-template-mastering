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
			var filter = /^([0-9]{11})+/;

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