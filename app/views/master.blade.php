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
        var historyApiEnable = false; // if true htlm5 history api will use
        var bgTime = 6000; // Background Image/Video animation display duration (ms)
        var bgPaused = false; // Background Image/Video animation paused
        var autoPlay = false; // Background audio autoplay
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
        <img src="{{  asset('_transparent.png') }}" alt="SSAMO Media" style="height: 400px; width: 400px">
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
<!--<script type='text/javascript' src='{{ asset("js/jquery.hoverdir.js") }}'></script>-->
<script type='text/javascript' src='{{ asset("js/jquery.knob.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/video.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/jquery.cookie.js") }}'></script>
<!--<script type='text/javascript' src='{{ asset("js/demo.js") }}'></script>-->

<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>

</body>

</html>