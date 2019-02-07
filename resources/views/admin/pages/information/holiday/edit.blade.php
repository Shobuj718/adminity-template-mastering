@extends('admin.master')

@section('page-title', 'Update Holiday List Information')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Holiday List</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/holiday/update/'.$holiday->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}

						<div class="form-group {{ $errors->has('holidayDate') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Holiday Date</label>
							<div class="col-sm-10">
								<input type="date" value="{{ $holiday->holidayDate }}" class="form-control" name="holidayDate" id="holidayDate" placeholder="Enter holiday date  ">
								@if($errors->has('holidayDate'))
									<span class="help-block">
										<strong>{{ $errors->first('holidayDate') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('details') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Details</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="details" class="form-control"  placeholder="Enter holiday details ">{{ $holiday->details }}</textarea>
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
								<img class="img-responsive" src="{{url($holiday->image ? $holiday->image : '')}}" width="80px" height="80px" alt="No Image">
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
