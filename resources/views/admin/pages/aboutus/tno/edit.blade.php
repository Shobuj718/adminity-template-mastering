@extends('admin.master')

@section('page-title',' Edit TNO Information')

@section('main-content')

	<!-- {{$tno->user->name}}<br>
	{{$tno->message}} -->

	<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Edit TNO Message</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/tno/'.$tno->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					{{method_field('patch')}}
						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">TNO Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $tno->user->name }}" class="form-control" name="name" id="name" >
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
								<input type="email" value="{{ $tno->user->email }}" class="form-control" id="email" name="email" >

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
								<input type="mobile" value="{{ $tno->user->mobile }}" class="form-control" id="mobile" name="mobile" >
								@if($errors->has('mobile'))
									<span class="help-block">
										<strong>{{ $errors->first('mobile') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('message') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Message</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="message" class="form-control" placeholder="Default textarea">{{ $tno->message }}</textarea>
								@if($errors->has('message'))
									<span class="help-block">
										<strong>{{ $errors->first('message') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Image Upload</label>
							<div class="col-sm-10">
								<input type="file" name="image" id="image" class="form-control">
								<img class="img-responsive" src="{{url($tno->image ? $tno->image : '')}}" width="80px" height="80px" alt="No Image">
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