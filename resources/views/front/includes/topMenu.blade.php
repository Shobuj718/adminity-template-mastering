

      <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:-5px;">  
        <div class="header_top" style="background-color:#F2184F !important;">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="http://www.worldehsan.com" target="_blank">Ehsan Soft</a></li>
              <!-- <li><a href="javascript:void(0);">About</a></li> -->
              
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Board Result</a>
                <ul class="dropdown-menu" role="menu" style="background-color:#000;font-family:'',sans-serif;">
                    <li><a href="http://eboardresults.com/app/" target="_blank">Result Publication System</a></li>
                    <li><a href="javascript:void(0)">SSC Board Result</a></li>
                    <li><a href="javascript:void(0)">Primary Result</a></li>
                </ul>
              </li>
              <li style="color:#fff;">
                <div class="lantra">  

          <div id="google_translate_element"> </div>

            <script type="text/javascript">

            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div> 
              </li>
            </ul>
          </div>
          <div class="header_top_right">

           <p> <?php $str = date('m-d-Y');
                //$dateObj = DateTime::createFromFormat('m-d-Y', $str);
                $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
echo $dt->format('F j, Y, g:i a'); ?> </p>
          </div>
        </div>
      </div>