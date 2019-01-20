@extends('front.master')

@section('main-title','Sports Competition Information ')

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


<h2 style="color:#D083CF"><center>Sports Competition Information   </center></h2><br>
<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
             <tr>
                <th>Id</th>
                <th>Sports_Name</th>
                <th>Sports_Title</th>    
                <th>Competition_Date</th>    
                <th>Download_File</th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td>1</td>
                <td>Name Here</td>
                <td>Title Here</td>
                <td>12-18-18</td>
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


