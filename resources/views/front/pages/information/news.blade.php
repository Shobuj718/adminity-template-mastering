@extends('front.master')

@section('main-title','News List in this school')

@section('header-section')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">    

@endsection

@section('style-section')
<style type="text/css">
	.vacancy{
		width: 50px;
		height: 50px;
	}
</style>
@endsection

@section('main-content')


<h2 style="color:#D083CF"><center>News List in this school</center></h2><br>
<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
             <tr>
                <th>Id</th>
                <th>Summary</th>
                <th>Details</th>
                <th>Posted At</th>    
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; ?>
        @foreach($data as $result)
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><a href="javascript:void(0)" target="_blank" >{{ $result->summary }}</a></td>
                <td>{{ $result->details }}</td>
                <td>{{ $result->created_at->format('Y-m-d') }}</td>
                <td><a href="javascript:void(0)" target="_blank" ><img class="vacancy img-center" src="{{url($result->image ? $result->image : '')}}"  alt="No Image" /></td>
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


