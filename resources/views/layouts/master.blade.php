<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>VShout</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/sliderevolution.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    <div class="preloader"></div>

    @include('layouts.header')

    <div style="margin-top:70px;">
        @yield('content')
    </div>
    
    @include('layouts.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="/js/jquery.js"></script> 
{{-- <script src="js/bootstrap.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/revolution.js"></script>
<script src="js/owl.js"></script>
<script src="js/easing.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/paralelex.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var $_Tawk_API={},$_Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3','auto');
  ga('send', 'pageview');

</script>
</body>
</html>