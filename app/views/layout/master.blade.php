
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('awd/style.css') }}" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('awd/style-awards.css') }}" type="text/css" media="screen" />

    <title>SSAMO MEDIA</title>

<!--    <link rel="alternate" type="application/rss+xml" title="AWDAGENCY RSS Feed" href="feed/index.html" />-->
<!--    <link rel="pingback" href="xmlrpc.php" />-->

    <meta name="description" content="SSAMO, SSAMO Media, video production.
photography,  graphic design">
    <meta name="keywords" content="SSAMO, video production, creative communication, web agency, mobile application, digital media, advertising campaign, shooting, photography, branding identity, social marketing">
    <meta name="author" content="ExpertDigitalAgency: kelvin Mbwilo" >

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('awd/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/transit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/myscript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/jquery.timelinr-0.9.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/jquery.inview.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/jquery.inview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/functions-newsletter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('awd/js/jquery.jInvertScroll.js') }}"></script>

</head>

<body>


<div id="menu-open"></div>

<div id="cont-menu">

    <div id="menu-close"></div>

    <a href="index.html"><img id="logo"  src="{{ asset('_transparent.png') }}" width="250" height="250" /></a>
    <!--<h3 id="payoff-logo">CREATIVE COMMUNICATION COMPANY</h3>-->

    <div id="menu">
        <ul id="first-menu">
            <li><a href="{{ url('ssamo') }}">HOME</a></li>
            <li><a href="{{ url('ssamo/about') }}">ABOUT</a></li>
            <li><a href="{{ url('ssamo/services') }}">SERVICES</a></li>
            <li><a href="{{ url('ssamo/portfolio') }}">PORTFOLIO</a></li>
            <li><a href="http://ssamomedia.tumblr.com" target="_blank">BLOG</a></li>
            <li><a href="{{ url('ssamo/contacts') }}">CONTACTS</a></li>
        </ul>
    </div>
    <div id="cont-social-menu">
        <!--<h2>STAY CONNECTED</h2>
        <h3>FOLLOW US ON SOCIAL NETWORK</h3>-->
        <div id="social-menu">
            <a class="" href="http://www.instagram.com/ssamomedia">
                <img src="{{ asset('ssamo_instagram.png') }}" style="height: 25px;width: 25px"/>
            </a>
            <a class="" href="">
                <img src="{{ asset('ssamo_facebook.png') }}" style="height: 25px;width: 25px"/>
            </a>
            <a class="" href="http://www.twitter.com/ssamomedia">
                <img src="{{ asset('ssamo_twitter.png') }}" style="height: 25px;width: 25px"/>
            </a>
            <a class="" href="https://www.linkedin.com/in/jnaphtal">
                <img src="{{ asset('ssamo_linkedin.png') }}" style="height: 25px;width: 25px"/>
            </a>
            <a class="e" href="https://plus.google.com/113565488570534539879/about">
                <img src="{{ asset('ssamo_google.png') }}" style="height: 25px;width: 25px"/>
            </a>
            <a class="e" href="http://ssamomedia.tumblr.com/">
                <img src="{{ asset('ssamo_tumblr.png') }}" style="height: 25px;width: 25px"/>
            </a>

        </div>

    </div>

    <p id="copyright">© COPYRIGHT {{ date('Y') }}.<br/>
        ALL RIGHT RESERVED <span style="color:#fff;">SSAMO Media</span><br/>
        </p>

</div>


<div id="cont-right-open" onclick="openContR('http://www.ssamomedia.com/');"></div>

<div id="cont">

    @yield('contents')


</div>
</body>
<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-11382876-1");
        pageTracker._trackPageview();
    } catch(err) {}
</script>
</html>