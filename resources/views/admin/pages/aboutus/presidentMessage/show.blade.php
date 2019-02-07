@extends('admin.master')

@section('page-title', 'Show school  history ')



@section('main-content')

</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h2>{{ $president->name }}</h2>

</div>
<div class="card-block user-desc">
<div class="view-desc">
<p style="text-align:justify;font-size:15px;">{{ $president->message }}</p>
</div>
<div class="edit-desc">
<div class="col-md-12">

</div>
<div class="text-center">
<a href="{{ url('/president/all') }}" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Back</a>
<a href="{{url('/president/'.$president->id.'/edit')}}" class="btn btn-info waves-effect waves-light m-r-20 m-t-20">Edit</a>
</div>

</div>
</div>
</div>
</div>
</div>


@endsection

