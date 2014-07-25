<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head lang="en-US">
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>SSAMO</title>
    <meta name="description" content="FlowAway Background Video/Image/Audio Supported Premium HTML5 Theme"/>
    <meta name='robots' content='index,follow'/>
    <script type="text/javascript">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dokv=88e434a982/"},atok:"ee40215d397c978090d2a8894e31e2e3",petok:"3a19646ec3766ce95870863d80c03f3b26c41854-1406110268-1800",zone:"renklibeyaz.com",rocket:"0",apps:{}}];CloudFlare.push({"apps":{"ape":"e0248e7e58877068e21e81853f0c6182"}});!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=97fb4d042e/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel='stylesheet' id='contentFont-css' href='http://fonts.googleapis.com/css?family=PT+Sans:&#038;subset=latin,cyrillic,latin-ext,cyrillic-ext' type='text/css' media='all'/>
    <link rel='stylesheet' id='headerFont-css' href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:&#038;subset=latin,cyrillic,latin-ext,cyrillic-ext' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css-css' href='{{ asset("css/bootstrap.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='{{ asset("css/font-awesome.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='flexslider-css-css' href='{{ asset("css/flexslider.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='videojs-css-css' href='{{ asset("css/video-js.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='ThemeKeyAnimations-css' href='{{ asset("css/animations.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='ThemeStyle' href='{{ asset("style.less") }}' type='text/less' media='all'/>

    <script type='text/javascript' src='{{ asset("js/jquery-1.11.0.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/jquery-migrate-1.2.1.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/modernizr.js") }}'></script>
    <link rel='stylesheet' id='demo-css' href='{{ asset("css/demo.css") }}' type='text/css' media='all'/>
    <script type='text/javascript' src='{{ asset("main.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/less-1.1.6.js") }}'></script>
    <script type='text/javascript'>
        var historyApiEnable = true; // if true htlm5 history api will use
        var bgTime = 6000; // Background Image/Video animation display duration (ms)
        var bgPaused = false; // Background Image/Video animation paused
        var autoPlay = true; // Background audio autoplay
        var loop = false; // Background audio loop or next song
        var videoSkipMobile = false; // if true background videos skips on mobile
        var NormalFade = false; // Normal fade or animated bg image
        var videoLoop = false; // if true video will be play again when end of the video.
        var muteWhilePlayVideo = true; // if true video mute while playing video
        var btnSoundUrlMp3 = 'http://files.renklibeyaz.com/sounds/pd-button.mp3'; // Button Hover Sound
        var btnSoundUrlOgg = 'http://files.renklibeyaz.com/sounds/pd-button.ogg'; // Button Hover Sound
        var videoMuted = false; // if true video start mute
        var loopBg = true; // if true backgroud item loop when end of the array
        var bgPatternV = 'block'; // if block pattern visible, if none pattern hide
        var videoPaused = false; // if true video doesn't start
        var bgStretch = true; // if true bg stretch
        var twitterEnable = true; // if true twitter data loaded by ajax
    </script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="body-wrapper">
    @include('menu')

    @yield('contents')
</div>

<div id="playWrapper">

    <div id="player">
        <div id="playerSongName"></div>
        <div id="playerController">
            <div id="playerLoadBar">
                <div id="playerBar">
                    <div id="playerBarActive"></div>
                </div>
            </div>
            <div id="playerSongDuration">
                <span class="current"></span>
                <span class="total"></span>
            </div>
            <a href="grid-gallery.html#" class="playerBtn mute"></a>
            <a href="grid-gallery.html#" class="playerBtn unmute"></a>
            <a href="grid-gallery.html#" class="playerBtn loop"></a>
            <a href="grid-gallery.html#" class="playerBtn nextsong"></a>
            <div id="volumeLoadBar">
                <div id="volumeBar">
                    <div id="volumeBarActive"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div id="audioList">
        <ul>
            <li data-mp3="http://files.renklibeyaz.com/sounds/Brandz-Nexus.mp3" data-ogg="http://files.renklibeyaz.com/sounds/Brandz-Nexus.ogg">Brandz - Nexus [2014]</li>
            <li data-mp3="http://files.renklibeyaz.com/sounds/Brandz-Angeldust.mp3" data-ogg="http://files.renklibeyaz.com/sounds/Brandz-Angeldust.ogg">Brandz - Angeldust [2014]</li>
            <li data-mp3="http://files.renklibeyaz.com/sounds/Brandz-Pleasure.mp3" data-ogg="http://files.renklibeyaz.com/sounds/Brandz-Pleasure.ogg">Brandz - Pleasure [2014]</li>
        </ul>
    </div>

</div>


<div id="bodyLoading">
    <div id="coverimage">
        <img src="{{  asset('logo1.png') }}" alt="SSAMO Media">
    </div>
</div>
<div id="REF_ColorFirst"></div>
<div id="REF_ColorSecond"></div>

<script type='text/javascript' src='{{ asset("js/jquery.easing.1.3.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/bootstrap.min.js") }}'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=true") }}'></script>
<script type='text/javascript' src='{{ asset("js/jqBootstrapValidation.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.history.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/froogaloop.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.fitvids.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.flexslider.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.form.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.nicescroll.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.hammer.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.isotope.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.isotope.perfectmasonry.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.hoverdir.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.knob.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/video.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.cookie.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/demo.js") }}'></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7274521-2']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 973232914;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/973232914/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>

</html>