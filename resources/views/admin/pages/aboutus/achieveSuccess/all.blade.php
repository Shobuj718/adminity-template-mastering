@extends('admin.master')

@section('page-title', 'All Achievement And Success Information ')

@section('header-section')

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/css/jquery.mCustomScrollbar.css">

@endsection

@section('style-section')
	<style type="text/css">
		.imageSize{
			width: 80px;
			height: 80px;
		}
	</style>
@endsection

@section('main-content')

<!-- @foreach($achieveSuccess as $data)
    {{ $data->name }}<br>
@endforeach -->


<div class="card">
	<div class="card-header">
		<h2 style="text-align:center">All Achievement And Success Information</h2>
				
			@if(Session::has('error'))
	            @include('admin.includes.errors')
	        @endif
	        @if(Session::has('success'))
	            @include('admin.includes.success')
	        @endif

        

	</div>
	<div class="card-block">
		<div class="table-responsive dt-responsive">
			<table id="multi-table" class="table table-striped table-bordered nowrap">
				<thead>
					<tr>
						<th>Sl.</th>
						<th>Summary</th>
						<th>Details</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php $sl =0 ?>
				@foreach($achieveSuccess as $data)

					<tr>
						<td><?php echo ++$sl; ?></td>
						<td>{{ $data->name }}</td>
						<td>{{ $data->details }}</td>
						<td><p class="text-center"><img class="img-circle imageSize img-responsive" src="{{url($data->image ? $data->image : '')}}"  alt="Image"></p>
						</td>

						<td>
                            <a href="{{url('/achieve_success/'.$data->id.'/edit')}}" class="btn hor-grd btn-grd-success">Edit</a>

                            <a  href="{{url('/achieve_success/delete/'.$data->id)}}" class="btn hor-grd btn-grd-danger">Delete</a>                               
                           
                        </td>
					</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Sl.</th>
						<th>Sumary</th>
						<th>Details</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

@endsection


@section('footer-section')
<script src="{{ asset('admin') }}/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script src="{{ asset('admin') }}/files/assets/pages/data-table/js/data-table-custom.js"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
@endsection