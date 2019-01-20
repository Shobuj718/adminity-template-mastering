@extends('front.master')

@section('main-title','Class Routine List in this school')

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


<h2 style="color:#D083CF"><center>Class Routine List in this school</center></h2><br>
<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
             <tr>
                <th>Id</th>
                <th>Class</th>
                <th>Section</th>
                <th>Summary</th>
                <th>Posted_At</th>    
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td>1</td>
                <td><a href="{{ asset('/uploads/information/2018 Vacation Notice .pdf') }}" target="_blank" >Six</a></td>
                <td>A</td>
                <td>this is test class routine summary list...this is test class routine summary list...this is test class routine summary list...</td>
                <td>12-12-12</td>
                <td><a href="{{ asset('/uploads/information/2018 Vacation Notice .pdf') }}" target="_blank" ><img class="vacancy img-center" src="uploads/tnoImage/Md Rakib Hasanasdf-1547620150.green-nature-wallpaper.jpg"  alt="No Image" /></td>
            </tr>
                    

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


