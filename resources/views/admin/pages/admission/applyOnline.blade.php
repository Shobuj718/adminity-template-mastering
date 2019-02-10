@extends('admin.master')

@section('page-title', 'Online Admission  Information ')

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



<div class="card">
	<div class="card-header">
		<h2 style="text-align:center">All Online Applicant </h2>
				
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
						<th>Student_name</th>
						<th>Class</th>
						<th>Department</th>
						<th>Gender</th>
						<th>Religion</th>
						<th>BirthDate</th>
						<th>GurdianNumber</th>
						<th>Image</th>
						<th>Status</th>
						<th>Action</th>
						<!-- <th>Address</th>
						<th>Father</th>
						<th>Father_occupation</th>
						<th>Mother</th>
						<th>Mother_occupation</th>
						<th>Payment_System</th>
						<th>Payment_amount</th>
						<th>Status</th> -->
						
					</tr>
				</thead>
				<tbody>
				<?php $i = 0; ?>
				@foreach($admission as $data)

					<tr>
						<td><?php echo ++$i; ?></td>
						<td>{{ $data->name }}</td>
						<td>{{ $data->class }}</td>
						<td>{{ $data->department }}</td>
						<td>{{ $data->gender }}</td>
						<td>{{ $data->religion }}</td>
						<td>{{ $data->birthDate }}</td>
						<td>{{ $data->mobile }}</td>
						<td><p class="text-center"><img class="img-circle imageSize img-responsive" src="{{url($data->image ? $data->image : '')}}"  alt="Image"></p>
						</td>

						<td>
							<?php 
								if($data->status == '0'){ ?>
						<a href="{{url('/admission/update/'.$data->id.'/'.$data->status)}}" class="btn hor-grd btn-grd-primary">qualified</a>;
								<?php  } else {?>
								
						<a href="{{url('/admission/update/'.$data->id.'/'.$data->status)}}" class="btn hor-grd btn-grd-danger">Desqualified</a>;

							<?php 	}	 ?>
							
						</td>

						<td>
                           <a href="{{url('/admission/show/'.$data->id)}}" class="btn hor-grd btn-grd-info">View</a>

                            <!-- <a href="{{url('/admission/'.$data->id.'/edit')}}" class="btn hor-grd btn-grd-success">Edit</a> -->

                            <a  href="{{url('/admission/delete/'.$data->id)}}" class="btn hor-grd btn-grd-danger" onclick="return confirm('Are you to delete')">Delete</a>
                                
                            
                        </td>

						<!-- <td>{{ $data->address }}</td>
						<td>{{ $data->father }}</td>
						<td>{{ $data->father_occupation }}</td>
						<td>{{ $data->mother }}</td>
						<td>{{ $data->mother_occupation }}</td>
						<td>{{ $data->payment }}</td>
						<td>{{ $data->status }}</td>
						<td>{{ $data->status }}</td> -->
						

						
					</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Sl.</th>
						<th>Student_name</th>
						<th>Class</th>
						<th>Department</th>
						<th>Gender</th>
						<th>Religion</th>
						<th>BirthDate</th>
						<th>GurdianNumber</th>
						<th>Image</th>
						<th>Status</th>
						<th>Action</th>
						<!-- <th>Address</th>
						<th>Father</th>
						<th>Father_occupation</th>
						<th>Mother</th>
						<th>Mother_occupation</th>
						<th>Payment_System</th>
						<th>Payment_amount</th>
						<th>Status</th> -->
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
<script type="text/javascript">
	document.getElementById('status').value = "{{$data->status}}"
</script>
@endsection