@extends('front.master')

@section('main-content')
		<div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <form name="form1" action="{{ url('contact/store') }}" class="contact_form" method="post">

            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name...">
              @if($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email...">
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              </div>

              <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <textarea class="form-control" cols="30" rows="10"  name="message" placeholder="Message*"></textarea>
                <span class="help-block">
                  <strong>{{ $errors->first('message') }}</strong>
                </span>
              </div>

              <input type="submit" name="submit" value="Send Message">
            </form>
          </div>
          
        </div>
@endsection