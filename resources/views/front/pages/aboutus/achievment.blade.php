@extends('front.master')

@section('main-title','Find Out the Achievement and Success')


@section('style-section')
	<style type="text/css">
		.priName{
			text-align:left;
		}
		.priAddress{
			text-align:left;
		}
		.tnoimage{
			align:center;
			width: 120px;
			height: 120px;
		}
		.priSpeach{
			text-align: justify;
		}
	</style>
@endsection

@section('main-content')

   <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <h2 class="priName">Find Out the Latest in School Law</h2>
            <p class="priAddress">Saghata pilot high school</p><br>
            <?php $i=0; ?>
            @foreach($data as $result)
                <h3><?php echo ++$i; ?>. {{ $result->name }}</h3>
                <p class="priSpeach">{{ $result->details }}</p>
            @endforeach

            
        </div>
    </div>

@endsection