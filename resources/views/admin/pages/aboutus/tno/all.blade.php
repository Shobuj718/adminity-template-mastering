@extends('admin.master')

@section('page-title', 'All TNO Information ')

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

<!-- @foreach($tno as $data)
    {{ $data->name }}<br>
@endforeach -->


<div class="card">
	<div class="card-header">
		<h2>TNO Information</h2>
	</div>
	<div class="card-block">
		<div class="table-responsive dt-responsive">
			<table id="multi-table" class="table table-striped table-bordered nowrap">
				<thead>
					<tr>
						<th>Sl.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Message</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($tno as $data)
					<tr>
						<td>01</td>
						<td>{{ $data->name }}</td>
						<td>{{ $data->email }}</td>
						<td>{{ $data->mobile }}</td>
						<td>{{ $data->message }}</td>
						<td><p class="text-center"><img class="img-circle imageSize img-responsive" src="{{url($data->image ? $data->image : '')}}"  alt="Image"></p>
						</td>

						<td>
							<a href="javascript:void(0)" class="btn hor-grd btn-grd-info">View</a>
                            <a href="{{url('/tno/'.$data->id.'/edit')}}" class="btn hor-grd btn-grd-success">Edit</a>

                            <a  href="{{url('/tno/'.$data->id)}}" class="btn hor-grd btn-grd-danger">Delete</a>
                                
                            <!-- <form style="display: none;" id="delete-form{{$data->id}}" method="post" action="{{url('/tno/'.$data->id)}}" style="padding: 0; margin: 0; outline: 0;">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            </form> -->
                        </td>
					</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Sl.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Message</th>
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