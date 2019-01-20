@extends('front.master')

@section('main-title','Former Teachers Information')

@section('content-heading')
    <h2 style="text-align:center;color:blue">Former Teachers </h2><br>
@endsection

@section('header-section')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">    

@endsection

@section('main-content')


<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Designation</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>

        <?php $i = 0; ?>
        @foreach($formerTeachers as $data)

            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->mobile }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->designation }}</td>
                 <td><img class="img-circle" src="uploads/ataglance/{{ $data->image }}" width="80px" height="80px" alt="No Image" /></td>    

                    
            </tr>

        @endforeach

        </tbody>
    </table>
</div>

@endsection

@section('footer-section')

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>



@endsection
