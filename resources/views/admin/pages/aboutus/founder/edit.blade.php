@extends('admin.master')

@section('page-title', 'Update Founder Information')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Founder Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/founder/update/'.$founder->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}

						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Founder Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $founder->name }}" class="form-control" name="name" id="name" placeholder="Enter name  ">
								@if($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('details') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Founder Details</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="details" class="form-control"  placeholder="Enter founder details ">{{ $founder->details }}</textarea>
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
								<input type="file" name="image" class="form-control">
								<img class="img-responsive" src="{{url($founder->image ? $founder->image : '')}}" width="80px" height="80px" alt="No Image">
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
