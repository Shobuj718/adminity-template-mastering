@extends('front.master')

@section('main-title','Book List   ')

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


<h2 style="color:#D083CF"><center>Book List   </center></h2><br>
<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
             <tr>
                <th>Id</th>
                <th>Book_Name</th>
                <th>Writer_Name</th>
                <th>Class_Name</th>    
                <th>Posted_at</th>    
                <th>Take_It</th>
            </tr>
        </thead>
        <tbody>
           <tr>
                <td>1</td>
                <td>English First Paper</td>
                <td>Mr. Johnson</td>
                <td>Seven</td>
                <td>12-18-18</td>
                <td><a href="http://www.worldehsan.com/" target="_blank" ><img class="vacancy img-center" src="uploads/tnoImage/Md Rakib Hasanasdf-1547620150.green-nature-wallpaper.jpg"  alt="No Image" /></td>
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


