<!DOCTYPE html>
<html>
<head>
<title>@yield('main-title')</title>
<link rel="shortcut icon" href="{{ asset('front') }}/images/ehsan soft logo.png">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

@include('front.includes.header')

@yield('header-section')


@yield('style-section')

</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container" style="margin-bottom:0px;">
  <header id="header" style="margin-top:0px;">
    <div class="row">


     @include('front.includes.topMenu')

     @include('front.includes.schoolName')

      
    </div>
  </header>
  
  <!--main menu starts -->

     @include('front.includes.mainMenu')
 
  <!--main menu ends -->



 <section>
    <div class="row">

      <!-- <div class="col-lg-1 col-md-1 col-sm-1">
        
      </div> -->

      <div class="col-lg-8 col-md-8 col-sm-8">

        @yield('content-heading')

        @yield('main-content')
      

      </div>
      
<!-- rightMenu starts-->
      @include('front.includes.rightMenu')
<!-- rightMenu starts-->


 


<!-- footer starts-->

    @include('front.includes.footer')

<!-- footer ends-->


<!-- copyright starts-->

    @include('front.includes.copyright')

<!-- copyright ends-->


  </footer>
</div>
<script src="{{ asset('front') }}/assets/js/jquery.min.js"></script> 
<script src="{{ asset('front') }}/assets/js/wow.min.js"></script> 
<script src="{{ asset('front') }}/assets/js/bootstrap.min.js"></script> 
<script src="{{ asset('front') }}/assets/js/slick.min.js"></script> 
<script src="{{ asset('front') }}/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="{{ asset('front') }}/assets/js/jquery.newsTicker.min.js"></script> 
<script src="{{ asset('front') }}/assets/js/jquery.fancybox.pack.js"></script> 
<script src="{{ asset('front') }}/assets/js/custom.js"></script>

@yield('footer-section')

<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }

    $(document).ready(function () {
        $('.alert').delay(3000).fadeOut(2000,function () {
            $(this).alert('close');
        });
    });

</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function($) {
        $('#printDiv').click(function (evt) {
            evt.preventDefault();
            $('#printableArea').printElement(
                {
                    overrideElementCSS: [
                        '{{ asset('front') }}/assets/css/bootstrap.min.css',
                        {
                            href: '/{{ asset('front') }}/assets/css/bootstrap.min.css',
                            media: 'print'
                        },
                    ],
                });
        });
    });
</script>

</body>
</html>
