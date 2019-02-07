@extends('admin.master')

@section('page-title', 'Update Parent Guideline Information')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Parent Guideline</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/parentsGuideline/update/'.$guideline->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}

						<div class="form-group {{ $errors->has('guideline') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Guideline Summary</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $guideline->guideline }}" class="form-control" name="guideline" id="guideline" placeholder="Enter guideline summary  ">
								@if($errors->has('guideline'))
									<span class="help-block">
										<strong>{{ $errors->first('guideline') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('details') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Guideline Details</label>
							<div class="col-sm-10">
								<textarea rows="5" cols="5" name="details" class="form-control"  placeholder="Enter guideline details ">{{ $guideline->details }}</textarea>
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
								<img class="img-responsive" src="{{url($guideline->image ? $guideline->image : '')}}" width="80px" height="80px" alt="No Image">
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
