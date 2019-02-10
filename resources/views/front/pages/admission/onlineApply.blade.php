@extends('front.master')

@section('main-title','Online Apply')


@section('header-section')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">    

@endsection
@section('content-heading')
    <h2 style="text-align:center;color:blue">Online Apply</h2><br>
@endsection

@section('style-section')
    <style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
@endsection

@section('main-content')


    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
         <form  method="post"  action="{{url('/admission/store')}}" enctype="multipart/form-data">
        {{csrf_field()}}

            <div class="row">
                <h3>Student Information</h3>

                @if(Session::has('error'))
                    @include('admin.includes.errors')
                @endif
                @if(Session::has('success'))
                    @include('admin.includes.success')
                @endif

            </div>


            <div class="row">
              <div class="col-25 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="fname">Student Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your name..">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('name') }}</span></span></strong>
                    </span>
                @endif
              </div>
            </div>
            
            <div class="row">
              <div class="col-25 {{ $errors->has('class') ? 'has-error' : '' }}">  
               <label for="class">Class Name</label>
              </div>
              <div class="col-75">
                <select id="class" name="class">
                  <option value="six">Six</option>
                  <option value="seven">Seven</option>
                  <option value="eight">Eight</option>
                  <option value="nine">Nine</option>
                  <option value="Ten">Ten</option>
                </select>
                @if($errors->has('class'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('class') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>  
            <div class="row">
<div class="col-25 {{ $errors->has('department') ? 'has-error' : '' }}">                <label for="class">Department</label>
              </div>
              <div class="col-75">
                <select id="department" name="department">
                  <option value="general">General</option>
                  <option value="science">Science</option>
                  <option value="humnities">Humanities</option>
                  <option value="commerce">Commerce</option>
                </select>
                @if($errors->has('department'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('department') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
<div class="col-25 {{ $errors->has('gender') ? 'has-error' : '' }}">                <label for="gender">Gender</label>
              </div>
              <div class="col-75">
                <select id="gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="common">Common</option>
                 
                </select>
                @if($errors->has('gender'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('gender') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            
            <div class="row">
<div class="col-25 {{ $errors->has('religion') ? 'has-error' : '' }}">                <label for="religion">Religion</label>
              </div>
              <div class="col-75">
                <select id="religion" name="religion">
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="christian">Christian</option>
                  <option value="buddha">Buddha</option>
                 
                </select>
                @if($errors->has('religion'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('religion') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
<div class="col-25 {{ $errors->has('birthDate') ? 'has-error' : '' }}">                <label for="birthDate">Date of Birth</label>
              </div>
              <div class="col-75">
                <input type="date" id="birthDate" name="birthDate" >
                @if($errors->has('birthDate'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('birthDate') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
<div class="col-25 {{ $errors->has('mobile') ? 'has-error' : '' }}">                <label for="mobile">Gurdian Mobile Number</label>
              </div>
              <div class="col-75">
                <input type="text" id="mobile" name="mobile" placeholder="Your mobile..">
                @if($errors->has('mobile'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('mobile') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="address">Addres</label>
              </div>
              <div class="col-75">
                <textarea cols="3" rows="3" id="address" name="address" placeholder="Write address.." style="height:200px"></textarea>
              </div>
            </div>
            <div class="row">
                <h3>Parent's Information</h3>
            </div>
              <div class="row">
<div class="col-25 {{ $errors->has('father') ? 'has-error' : '' }}">                <label for="father">Father Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="father" name="father" placeholder="Your father name..">
                @if($errors->has('father'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('father') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
<div class="col-25 {{ $errors->has('father_occupation') ? 'has-error' : '' }}">                <label for="fname">Father Occupation</label>
              </div>
              <div class="col-75">
                <input type="text" id="father_occupation" name="father_occupation" placeholder="Your father occupation..">
                @if($errors->has('father_occupation'))
                    <span class="help-block">
                        <strong><span class="text-danger">{{ $errors->first('father_occupation') }}</span></strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="fname">Mother Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="mother" name="mother" placeholder="Your mother name..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="fname">Mother Occupation</label>
              </div>
              <div class="col-75">
                <input type="text" id="mother_occupation" name="mother_occupation" placeholder="Your mother occupation..">
              </div>
            </div>

            <div class="row">
             <h3>Payment Information</h3>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="payment">Payment</label>
              </div>
              <div class="col-75">
                <select id="payment" name="payment">
                  <option value="bkash">bKash</option>
                  <option value="rocket">Rocket</option>           
                 
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">Amount</label>
              </div>
              <div class="col-75">
                <input type="text" id="amount" name="amount" placeholder="Send amount money..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="fname">Transaction</label>
              </div>
              <div class="col-75">
                <input type="text" id="trxid" name="trxid" placeholder="Your  transaction id..">
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image Upload</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" onchange="readURL(this);">
                    <img id="image" src="#" alt=" " />
                </div>
            </div>

            <div class="row">
              <input type="submit" value="Submit">
            </div>
          </form>
    </div>
</div>
@endsection


@section('footer-section')



<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

@endsection