@extends('admin.master')

@section('page-title', 'Update Important Link Information')

@section('header-section')

<link rel="stylesheet" href="{{ asset('admin') }}/files/bower_components/select2/css/select2.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/bower_components/multiselect/css/multi-select.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/css/jquery.mCustomScrollbar.css">
@endsection

@section('style-section')

<style type="text/css">
	.select2-container--default .select2-selection--single .select2-selection__rendered {
	 color: #fff; 
	 line-height: 15px;
}
</style>

@endsection

@section('main-content')


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header">
					<h2 style="text-align:center">Update Important Link Information</h2>
				
					@if(Session::has('error'))
			            @include('admin.includes.errors')
			        @endif
			        @if(Session::has('success'))
			            @include('admin.includes.success')
			        @endif

		        </div>

				<div class="card-block">
					<form  method="post"  action="{{url('/importanlink/update/'.$importantlink->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}

						<div class="form-group {{ $errors->has('linkName') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Link Name</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $importantlink->linkName }}" class="form-control" name="linkName" id="linkName" placeholder="Enter important link name   ">
								@if($errors->has('linkName'))
									<span class="help-block">
										<strong>{{ $errors->first('linkName') }}</strong>
									</span>
								@endif
							</div>
						</div>

						

						<div class="form-group {{$errors->has('address') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Link Address</label>
							<div class="col-sm-10">
								<input type="text" value="{{ $importantlink->address }}" class="form-control" name="address" id="address" placeholder="Enter  address  link ">
								@if($errors->has('address'))
									<span class="help-block">
										<strong>{{ $errors->first('address') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }} row">
							<label class="col-sm-2 col-form-label">Category Name</label>

							<div class="col-sm-10 ">
								<select class="js-example-basic-single col-sm-12" name="category_id" id="category_id">
									
									@foreach($category as $data)
										<option value="{{$data->id}}">{{ $data->category }}</option>
									@endforeach
								</select>

								@if($errors->has('category_id'))
									<span class="help-block">
										<strong>{{ $errors->first('category_id') }}</strong>
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

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/select2/js/select2.full.min.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">


</script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/advance-elements/select2-custom.js"></script>
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
<script type="text/javascript">
	document.getElementById('category_id').value = "{{$importantlink->category_id}}"
</script>

@endsection