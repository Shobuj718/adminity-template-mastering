<section id="navArea" class="header-wrapper sticky">
    <nav class="navbar navbar-inverse  " role="navigation" style="background-color:#202C45 !important">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse header-wrapper">
        <ul class="nav navbar-nav main_nav ">
          <li class="active"><a href="{{ url('/') }}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">At a glance</a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/governingcouncil') }}">Governing Council </a></li>
                <li><a href="{{ url('/managingcommitee') }}">Managing Committe</a></li>
                <li><a href="{{ url('/teacherinfo') }}">Teacher Information</a></li>
                <li><a href="{{ url('/studentinfo') }}">Student Information</a></li>
                <li><a href="{{ url('/employeeinfo') }}">Employe Information</a></li>
              <li><a href="{{ url('/assetinfo') }}">Assets</a></li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us</a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-7">
                  <li><a href="{{ url('/tnomessage') }}">TNO message</a></li>
                  <li><a href="{{ url('/presidentmessage') }}">President message</a></li>
                  <li><a href="{{ url('/principalmessage') }}">Principle message</a></li>
                  <li><a href="{{ url('/viceprincipalmessage') }}">Vice Principle message</a></li>
                  <li><a href="{{ url('/history') }}">History of institution</a></li>
                  <li><a href="{{ url('/founder') }}">Institution Founder</a></li>
                </div>
                <div class="col-md-5">
                  <li><a href="{{ url('/schoollaw') }}">School Law</a></li>
                  <li><a href="{{ url('/goalpurpose') }}">Goal & Purpose</a></li>
                  <li><a href="{{ url('/achievment') }}"> Achievement ও Success</a></li>
                  <li><a href="{{ url('/infrastructure') }}">Physical infrastructure</a></li>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information </a>
            <ul class="dropdown-menu" role="menu" style="min-width:420px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
                <li><a href="{{ url('/studentsummary') }}">Student Summary</a>
                <li><a href="{{ url('/vacancy') }}">Vacancy</a>
                  <li><a href="{{ url('/news') }}">News</a></li>
                <li><a href="{{ url('/holiday') }}">Holiday List</a></li> 
                <li><a href="{{ url('/facility') }}">Facilities</a></li>
                <li><a href="http://www.worldehsan.com/" target="_blank">Library</a></li>
                
                </div>
                <div class="col-md-7">
                <li><a href="http://www.muktopaath.gov.bd" target="_blank">Free lession</a></li>
                <li><a href="http://www.teachers.gov.bd" target="_blank">Teachers Batayon  </a></li>
                <li><a href="http://www.konnect.edu.bd" target="_blank">Students  Batayon  </a></li>      
                <li><a href="{{ url('/formerPrinciples') }}">Former Principles</a></li>
                <li><a href="{{ url('/formerTeachers') }}">Former Teachers</a></li>
                <li><a href="{{ url('/formerCommiteeMembers') }}">Former Committe Members</a></li>

                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic</a>
            <ul class="dropdown-menu" role="menu" style="min-width:450px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-6">
                  <li><a href="{{ url('/classRoutine') }}">Class Routine</a></li>
                  <li><a href="{{ url('/examRoutine') }}">Examination Routine</a></li>
                  <li><a href="{{ url('/examResults') }}">Examination Result</a></li>
                <li><a href="{{ url('/academicCalendar') }}">Academic Calender</a></li>
                <li><a href="{{ url('/parentsGuideline') }}">Guidelines for Parents</a></li>      
                </div>
                <div class="col-md-6">  
                <li><a href="{{ url('/photoGallery') }}">Photo Gallery</a></li>
                <li><a href="{{ url('/videoGallery') }}">Video Gallery</a></li>         
                <li><a href="http://www.educationboardresults.gov.bd/">Board Result</a></li>
                <li><a href="http://www.ebook.gov.bd/">E-book</a>                      
                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events </a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
                    <li><a href="{{ url('/yellow') }}">Yellow bird</a></li>
                  <li><a href="{{ url('/scout') }}">Scout</a></li>
                  <li><a href="{{ url('/girlsGuide') }}">Girls' Guide</a></li>
                  <li><a href="{{ url('/redCresent') }}">Red Cresent</a></li>
                  <li><a href="{{ url('/display') }}">Display</a></li>
                      
                </div>
                <div class="col-md-7">
                  <li><a href="{{ url('/volunteer') }}">Volunteer</a></li> 
                 <li><a href="{{ url('/annualMilad') }}">Annual  Milad mahfil</a></li>
                  <li><a href="{{ url('/studentParlament') }}">Student parliament</a></li> 
                  <li><a href="{{ url('/sportsCompetition') }}">Sports Competition</a></li>
                  <li><a href="{{ url('/culturalProgram') }}">cultural program</a></li>
                </div>
              </div>
            </ul>
          </li>    
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admission</a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/admissionNotice') }}">Admission Notice</a></li>
            <li><a href="{{ url('/login') }}">Apply Online </a></li>
                <li><a href="{{ url('/admissionGuideline') }}">Admission Guidelines</a></li>
                <li><a href="{{ url('/admissionResult') }}">Admission Results</a></li>
              <li><a href="{{ url('/feesPayment') }}">Fees & Payments</a></li>
            </ul>
          </li> 
           <li><a href="{{ url('contact') }}">Contact </a></li>
          
          <li style="text-align:;"><a href="{{ url('/login') }}">Log In</a></li>

        </ul>
      </div>
    </nav>
  </section>
  

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>News</span>
        <marquee class="news_sticker" style="color:#fff;padding-top:5px;" behavior='scrol' scrollamount='4'  direction=''  delay='200' onmouseover='stop()' onmouseout='start()'> 

          
              <a style="color:#fff;" target="_blank" href="view/admin/uploads/news/c19738b2e6.pdf" > * সরকারি/বেসরকারি মাধ্যমিক ও নিম্নমাধ্যমিক বিদ্যালয়সমূহের ২০১৮ শিক্ষাবর্ষের ছুটির তালিকা ও শিক্ষাপঞ্জি । &nbsp;&nbsp; </a>
           
                
              
           </marquee>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="javascript:void(0);"></a></li>
              <li class="twitter"><a href="javascript:void(0);"></a></li>
              <li class="googleplus"><a href="javascript:void(0);"></a></li>
              <li class="youtube"><a href="javascript:void(0);"></a></li>
              <li class="pinterest"><a href="#"></a></li> 
              <li class="vimeo"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
