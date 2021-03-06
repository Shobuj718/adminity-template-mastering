@extends('admin.master')

@section('page-title', 'Add New Category')


@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Add New Category</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/category/store')}}" enctype="multipart/form-data">
					{{csrf_field()}}


						<div class="form-group {{$errors->has('category') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Category Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('category') }}" class="form-control" name="category" id="category" placeholder="Enter  category  name ">
								@if($errors->has('category'))
									<span class="help-block">
										<strong>{{ $errors->first('category') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Category Title</label>
							<div class="col-sm-10">
								<input type="text" value="{{ old('title') }}" class="form-control" name="title" id="title" placeholder="Enter event name   ">
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