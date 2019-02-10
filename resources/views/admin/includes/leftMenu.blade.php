
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel">Dashboard</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu  pcoded-trigger">
<a href="{{ url('/') }}">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Back Website</span>
</a>

</li>

<!-- <li class="">
<a href="navbar-light.html">
<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
<span class="pcoded-mtext">Navigation</span>
</a>
</li> -->
<li class="pcoded-hasmenu">
	<a href="javascript:void(0)">
		<span class="pcoded-micon"><i class="feather icon-layers"></i></span>
		<span class="pcoded-mtext">At A Glance</span>
	<!-- <span class="pcoded-badge label label-danger"> 100+ </span> -->
	</a>
	<ul class="pcoded-submenu">
		<li class="">
			<a href="#">
				<span class="pcoded-mtext">Governing Council</span>
			</a>
		</li>
		<li class="">
			<a href="{{url('/commitee/all')}}">
				<span class="pcoded-mtext">Managing Commitee</span>
			</a>
		</li>
		<li class="">
			<a href="javascript:void(0)">
				<span class="pcoded-mtext">Teacher Info</span>
			</a>
		</li>
		<li class="">
			<a href="javascript:void(0)">
				<span class="pcoded-mtext">Student Info</span>
			</a>
		</li>
		<li class="">
			<a href="javascript:void(0)">
				<span class="pcoded-mtext">Employee Info</span>
			</a>
		</li>

		<li class="pcoded-hasmenu ">
			<a href="javascript:void(0)">
				<span class="pcoded-mtext">Assets</span>
			</a>
			<ul class="pcoded-submenu">
				<li class="">
					<a href="{{url('/assets/add')}}">
						<span class="pcoded-mtext">Add Assets</span>
					</a>
				</li>
			</ul>
			<ul class="pcoded-submenu">
				<li class="">
					<a href="{{ url('/assets/all') }}">
						<span class="pcoded-mtext">All Assets</span>
					</a>
				</li>
			</ul>
		</li>

	</ul>
</li>
	

<!-- <div class="pcoded-navigatio-lavel">Other</div>
 -->
<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Category</span>
		</a>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/category/add') }}">
					<span class="pcoded-mtext">Add Category</span>
				</a>
			</li>
		</ul>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/category/all') }}">
					<span class="pcoded-mtext">All Category</span>
				</a>
			</li>
		</ul>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/subcategory/add') }}">
					<span class="pcoded-mtext">Add Sub Category</span>
				</a>
			</li>
		</ul>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/subcategory/all') }}">
					<span class="pcoded-mtext">All Sub Category</span>
				</a>
			</li>
		</ul>
	</li>
</ul>



<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">About Us</span>
		</a>
		<ul class="pcoded-submenu">
			
			

			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">TNO Message</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{url('/tno/create')}}">
							<span class="pcoded-mtext">Add TNO Message</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/tno') }}">
							<span class="pcoded-mtext">All TNO Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">President Message</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('president/add') }}">
							<span class="pcoded-mtext">Add President Message</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('president/all') }}">
							<span class="pcoded-mtext">All President Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Principal Message</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('principal/add') }}">
							<span class="pcoded-mtext">Add Principal Message</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('principal/all') }}">
							<span class="pcoded-mtext">All Principal Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Vice Principal Message</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('vicePrincipal/add') }}">
							<span class="pcoded-mtext">Add Vice Principal Message</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('vicePrincipal/all') }}">
							<span class="pcoded-mtext">All Vice Principal Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">History Of Institution</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/history/add') }}">
							<span class="pcoded-mtext">Add History Of Institution</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/history/all') }}">
							<span class="pcoded-mtext">All History Of Institution</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Founder Of Institution</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/founder/add') }}">
							<span class="pcoded-mtext">Add Founder Of Institution</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/founder/all') }}">
							<span class="pcoded-mtext">Founder Information</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">School Law</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/schoollaw/add') }}">
							<span class="pcoded-mtext">Add School Law</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/schoollaw/all') }}">
							<span class="pcoded-mtext">All School Law</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Goul & Purpose Law</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/goalpurpose/add') }}">
							<span class="pcoded-mtext">Add Goul & Purpose</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('goalpurpose/all') }}">
							<span class="pcoded-mtext">All Goul & Purpose</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Achievement & Success</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/achieve_success/add') }}">
							<span class="pcoded-mtext">Add Achievement & Success</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/achieve_success/all') }}">
							<span class="pcoded-mtext">All Achievement & Success</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Physical Infrastructure</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('physical_infra/add') }}">
							<span class="pcoded-mtext">Add Physical Infrustructure</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('physical_infra/all') }}">
							<span class="pcoded-mtext">All Physical Infrustructure</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

 <!-- information menu -->


<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Information</span>
		</a>
		<ul class="pcoded-submenu">
			
			<li class="pcoded-hasmenu ">
				<a href="{{ url('/studentsummary/all') }}">
					<span class="pcoded-mtext">Student Summary</span>
				</a>
			</li>

			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">News</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/news/add') }}">
							<span class="pcoded-mtext">Add News</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/news/all') }}">
							<span class="pcoded-mtext">All News</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Holiday List</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/holiday/add') }}">
							<span class="pcoded-mtext">Add Holiday List</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/holiday/all') }}">
							<span class="pcoded-mtext">All Holiday List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Vacancy</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/vacancy/add') }}">
							<span class="pcoded-mtext">Add Vacancy </span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/vacancy/all') }}">
							<span class="pcoded-mtext">All Vacancy</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Facilities</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('facility/add')}}">
							<span class="pcoded-mtext">Add Facilities </span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('facility/all')}}">
							<span class="pcoded-mtext">All Facilities</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Library</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Free lession</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Teachers Batayon</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Student Batayon</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Former Principles</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Former Teachers</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Former Committe Members</span>
				</a>
			</li>
		</ul>
	</li>
</ul>


<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Academic Info</span>
		</a>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Class Routine</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Examination Routine</span>
				</a>
			</li>
			<li class="">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Examination Result</span>
				</a>
			</li>

			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Guidelines for Parents</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('parentsGuideline/add') }}">
							<span class="pcoded-mtext">Add Guidelines</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('parentsGuideline/all') }}">
							<span class="pcoded-mtext">All Guidelines</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Text Book</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">Add Text Book</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">All Text Book</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Photo Gallery</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">Add Photo</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">All Photo</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Video Gallery</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">Add Video</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="javascript:void(0)">
							<span class="pcoded-mtext">All Video</span>
						</a>
					</li>
				</ul>
			</li>

			<ul class="pcoded-submenu">
				<li class="">
					<a href="javascript:void(0)">
						<span class="pcoded-mtext">Board Result</span>
					</a>
				</li>
			</ul>
			<ul class="pcoded-submenu">
				<li class="">
					<a href="javascript:void(0)">
						<span class="pcoded-mtext">E-book</span>
					</a>
				</li>
			</ul>

		</ul>
	</li>
</ul>


<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Events Information</span>
		</a>
		<ul class="pcoded-submenu">
		
			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Events</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/event/add') }}">
							<span class="pcoded-mtext">Add Events</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/event/all') }}">
							<span class="pcoded-mtext">All Events</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/eventInfo/add') }}">
							<span class="pcoded-mtext">Add Events Info</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/eventInfo/all') }}">
							<span class="pcoded-mtext">All Events Info</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="pcoded-hasmenu ">
				<a href="javascript:void(0)">
					<span class="pcoded-mtext">Volunteer List</span>
				</a>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/volunteer/add') }}">
							<span class="pcoded-mtext">Add Volunteer</span>
						</a>
					</li>
				</ul>
				<ul class="pcoded-submenu">
					<li class="">
						<a href="{{ url('/volunteer/all') }}">
							<span class="pcoded-mtext">All Volunteer</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>




	
<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Slider Option</span>
		</a>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/slider/add') }}">
					<span class="pcoded-mtext">Add Slider</span>
				</a>
			</li>
		</ul>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/slider/all') }}">
					<span class="pcoded-mtext">All Slider</span>
				</a>
			</li>
		</ul>
	</li>
</ul>
<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Important Links</span>
		</a>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/importanlink/add') }}">
					<span class="pcoded-mtext">Add Important Link</span>
				</a>
			</li>
		</ul>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/importanlink/all') }}">
					<span class="pcoded-mtext">All Important Link</span>
				</a>
			</li>
		</ul>
	</li>
</ul>
	
<ul class="pcoded-item pcoded-left-item">
	<li class="pcoded-hasmenu ">
		<a href="javascript:void(0)">
			<span class="pcoded-micon"><i class="feather icon-list"></i></span>
			<span class="pcoded-mtext">Admission Online</span>
		</a>
		<ul class="pcoded-submenu">
			<li class="">
				<a href="{{ url('/admission/all') }}">
					<span class="pcoded-mtext">Apply Online</span>
				</a>
			</li>
		</ul>
	</li>
</ul>






</ul>
</div>
</nav>


<!-- $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);
      $share = new Share([
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'share_qty'=> $request->get('share_qty')
      ]);
      $share->save();
      return redirect('/shares')->with('success', 'Stock has been added'); -->