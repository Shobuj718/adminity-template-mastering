@extends('admin.master')

@section('page-title', 'Update Category Information')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Category Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/category/update/'.$category->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}

						<div class="form-group {{ $errors->has('category') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Category Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $category->category }}" class="form-control" name="category" id="category" placeholder="Enter category category   ">
								@if($errors->has('category'))
									<span class="help-block">
										<strong>{{ $errors->first('category') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('title') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Category Title</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $category->title }}" class="form-control" name="title" id="title" placeholder="Enter  title  name ">
								@if($errors->has('title'))
									<span class="help-block">
										<strong>{{ $errors->first('title') }}</strong>
									</span>
								@endif
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
