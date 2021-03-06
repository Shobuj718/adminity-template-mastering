@extends('front.master')

@section('main-title','Yellow Bird Event List ')

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


<h2 style="color:#D083CF"><center>Yellow Bird Event List   </center></h2><br>
<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
             <tr>
                <th>Id</th>
                <th>Event_Name</th>
                <th>Event_Title</th>    
                <!-- <th>Posted_at</th>   -->  
                <th>Details</th>
                <th>Download_File</th>
            </tr>
        </thead>
        <tbody>
           <?php $i=0; ?>
        @foreach($data as $result)
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><a href="javascript:void(0)" target="_blank" >{{ $result->event_name }}</a></td>
                <td>{{ $result->category }}</td>
                <td>{{ $result->details }}</td>
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


