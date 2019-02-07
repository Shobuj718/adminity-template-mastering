@extends('admin.master')

@section('page-title', 'Edit Vacancy List Information')

@section('header-section')

@endsection

@section('main-content')


 <div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Edit Vacancy List Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/vacancy/update/'.$vacancy->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="form-group {{ $errors->has('className') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Class Name </label>
							<div class="col-sm-10">
								<input type="text" value="{{ $vacancy->className }}" class="form-control" name="className" id="className" placeholder="Enter  Class Name  ">
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
								<input type="text" value="{{  $vacancy->totalSeats }}" class="form-control" name="totalSeats" id="totalSeats" placeholder="Enter Total Seats number ">
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
								<input type="text" value="{{  $vacancy->emptySeats }}" class="form-control" name="emptySeats" id="emptySeats" placeholder="Enter Empty Seats number ">
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
								<textarea rows="5" cols="5" name="details" class="form-control"  placeholder="Enter details ">{{  $vacancy->details }}</textarea>
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
								<img class="img-responsive" src="{{url($vacancy->image ? $vacancy->image : '')}}" width="80px" height="80px" alt="No Image">
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