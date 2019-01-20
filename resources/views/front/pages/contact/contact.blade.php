@extends('front.master')

@section('main-content')
		<div class="left_content">
          <div class="contact_area" onload="document.form1.email.focus()">
            <h2>Contact Us</h2>
            <p></p>
            <form name="form1" action="javascript:void(0)" class="contact_form" method="post">
              <!-- <input class="form-control" type="text" name="name" placeholder="Name*"> -->
              <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name...">
              <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email...">
              <textarea class="form-control" cols="30" rows="10"  name="message" placeholder="Message*"></textarea>
              <input onclick="ValidateEmail(document.form1.email)" type="submit" name="submit" value="Send Message">
            </form>
          </div>
          <script type="text/javascript">
            function ValidateEmail(inputText)
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(inputText.value.match(mailformat))
                {
                document.form1.text1.focus();
                return true;
                }
                else
                {
                alert("You have entered an invalid email address!");
                document.form1.text1.focus();
                return false;
                }
            }

          </script>
        </div>
@endsection