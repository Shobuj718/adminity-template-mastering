@extends('admin.master')

@section('page-title', 'Online Admission System ')

@section('header-section')



<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/assets/icon/icofont/css/icofont.css">


<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/files/bower_components/jquery.steps/css/jquery.steps.css">


@endsection

@section('main-content')


<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<div class="d-inline">
					<h2>Online Admission System </h2>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class="breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="index.html"> <i class="feather icon-home"></i> </a>
					</li>
					<li class="breadcrumb-item"><a href="">apply online</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="page-body">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4>Online Apply Form</h4>
					<span>Please Fill up the red star button...</span>
				</div>
				<div class="card-block">
					<div class="row">
						<div class="col-md-12">
							<div id="wizard">
								<section>


		<form class="wizard-form" id="example-advanced-form" action="#">
			<h3> General Information </h3>
			<fieldset>
					<div class="form-group row">
						<div class="col-md-4 col-lg-2">
							<label for="userName-2" class="block">Your Name *</label>
						</div>
						<div class="col-md-8 col-lg-10">
							<input id="userName-2" name="userName" type="text" placeholder="Enter your name " class="required form-control">
						</div>
					</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="email-2" class="block">Email *</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="email-2" name="email" type="email" class="required form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="password-2" class="block">Password *</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="password-2" name="password" type="password" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="confirm-2" class="block">Sessin *</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="confirm-2" name="confirm" type="password" class="form-control required">
					</div>
				</div>
			</fieldset>
			<h3> Academic Information </h3>
			<fieldset>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="name-2" class="block">Class *</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="name-2" name="name" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="surname-2" class="block">Department *</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="surname-2" name="surname" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="phone-2" class="block">Phone #</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="phone-2" name="phone" type="number" class="form-control required phone">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="date" class="block">Date Of Birth</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="date" name="Date Of Birth" type="text" class="form-control required date-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">Select Division</div>
					<div class="col-md-8 col-lg-10">
						<select class="form-control required">
							<option>Select Division</option>
							<option>Dhaka</option>
							<option>Rangpur</option>
							<option>Rajshahi</option>
							<option>Silet</option>
							<option>Chottogram</option>
							<option>Khulna</option>
							<option>Borisha</option>
							<option>Moymongsing</option>
						</select>
					</div>
				</div>
			</fieldset>
			<h3> Education </h3>
				<fieldset>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="University-2" class="block">School</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="University-2" name="University" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="Country-2" class="block">Division</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="Country-2" name="Country" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="Degreelevel-2" class="block">Class level #</label>
					</div>
					<div class="col-md-8 col-lg-10">
					 	<input id="Degreelevel-2" name="Degree level" type="text" class="form-control required phone">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="datejoin" class="block">Date Join</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="datejoin" name="Date Of Birth" type="text" class="form-control required">
					</div>
				</div>
			</fieldset>
			<h3> Payment method </h3>
			<fieldset>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="Company-2" class="block">Company:</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="Company-2" name="Company:" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="CountryW-2" class="block">Country</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="CountryW-2" name="Country" type="text" class="form-control required">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4 col-lg-2">
						<label for="Position-2" class="block">Position</label>
					</div>
					<div class="col-md-8 col-lg-10">
						<input id="Position-2" name="Position" type="text" class="form-control required">
					</div>
				</div>
			</fieldset>
		</form>






								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection


@section('footer-section')


<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script src="{{ asset('admin') }}/files/bower_components/jquery.cookie/js/jquery.cookie.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/jquery.steps/js/jquery.steps.js"></script>
<script src="{{ asset('admin') }}/files/bower_components/jquery-validation/js/jquery.validate.js"></script>

<script src="{{ asset('admin') }}/{{ asset('admin') }}/{{ asset('admin') }}/{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{ asset('admin') }}/{{ asset('admin') }}/{{ asset('admin') }}/{{ asset('admin') }}/cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/pages/form-validation/validate.js"></script>

<script src="{{ asset('admin') }}/files/assets/pages/forms-wizard-validation/form-wizard.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/pcoded.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/vartical-layout.min.js"></script>
<script src="{{ asset('admin') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{ asset('admin') }}/files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script type="text/javascript">

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

</script>
@endsection