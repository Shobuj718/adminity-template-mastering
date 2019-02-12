<!DOCTYPE html>

<html>

<head>

    <title>Download Application Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    
	<style type="text/css">
		.test tr td{
			padding-bottom: 10px;
		}
	</style>
</head>

<body>

	<div class="row">

	<h3> <strong> School Name here </strong></h3>
	<h4>Bogura, Bogura Sadar</h4>

	  <hr/>
        @foreach($values as $data)
         <h3>Student Name : <strong> {{ $data->name }} </strong> </h3>

         <h4>Application ID : <strong> {{ $data->apply_id }} </strong> </h4>
        <table class="test">
            <tr>
                <th>Class </th>
                <td width="40px"></td>
                <td>{{ $data->class }}</td>
            </tr>
            <tr>
                <th>Department </th>
                <td width="40px"></td>
                <td>{{ $data->department }}</td>
            </tr>
            <tr>
                <th>Gender    </th>
                <td width="40px"></td>
                <td>{{ $data->gender }}</td>
            </tr>
            <tr>
                <th>Religion   </th>
                <td width="40px"></td>
                <td>{{ $data->religion }}</td>
            </tr>
            <tr>
                <th>Date of Birth   </th>
                <td width="40px"></td>
                <td>{{ $data->birthDate }}</td>
            </tr>
            <tr>
                <th>Father Name </th>
                <td width="40px"></td>
                <td>{{ $data->father }}</td>
            </tr>
            <tr>
                <th>Father Occupation </th>
                <td width="40px"></td>
                <td>{{ $data->father_occupation }}</td>
            </tr>
            <tr>
                <th>Mother Name </th>
                <td width="40px"></td>
                <td>{{ $data->mother }}</td>
            </tr>
            <tr>
                <th>Mother Occupation </th>
                <td width="40px"></td>
                <td>{{ $data->mother_occupation }}</td>
            </tr>
            <tr>
                <th>Gurdian Number </th>
                <td width="40px"></td>
                <td>{{ $data->mobile }}</td>
            </tr>
            <tr>
                <th>Address </th>
                <td width="40px"></td>
                <td>{{ $data->address }}</td>
            </tr>
            <tr>
                <th>Payment Process </th>
                <td width="40px"></td>
                <td>{{ $data->payment }}</td>
            </tr>
            <tr>
                <th>Payment Amount </th>
                <td width="40px"></td>
                <td>{{ $data->amount }}</td>
            </tr>
            <tr>
                <th>Payment Status </th>
                <td width="40px"></td>
                <td>
                    @if($data->status == 0)
                        Inactive
                    @else
                        Active
                    @endif

                    
                    
                </td>
            </tr>
            <tr>
                <th>Image </th>
                <td width="40px"></td>
				<td>
                    <p class="text-center"><img src="{{url($data->imag)}}"  alt="Image"></p>

                </td>
            </tr>
          @endforeach
        </table>
    </div>



	</div>

	<hr>


</body>

</html>