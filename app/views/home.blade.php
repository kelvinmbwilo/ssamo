@extends('master')

@section('contents')
<div id="bgPlayer">
    <div id="mediaWrapper"></div>
    <div id="bgPattern"></div>
    <div id="mediaTimer"></div>
    <div id="bgText">
        <div class="headerTextWrapper"><div class="headerText"></div></div>
        <div class="clearfix"></div>
        <div class="subTextWrapper"><div class="subText"></div></div>
    </div>

    <a class="prevBG" href="javascript:void(0);"></a>
    <a class="nextBG" href="javascript:void(0);"></a>
    <div class="itemNumbers">
        <span class="currentItemNo"></span> <span class="currentItemSeperator">/</span> <span class="totalItemCount"></span>
        <a href="portfolio-fullpage-grid.html#" class="currentPlayPause"></a>
    </div>
    <div class="screenControl">
        <a class="fitBG" href="javascript:void(0);"></a>
        <a class="fitCenterBG" href="javascript:void(0);"></a>
        <a class="fullCenterBG" href="javascript:void(0);"></a>
        <a class="bgTextToggle" href="javascript:void(0);"></a>
    </div>
    <div class="bgImageLoading">
        <div id="circleG">
            <div id="circleG_1" class="circleG"></div>
            <div id="circleG_2" class="circleG"></div>
            <div id="circleG_3" class="circleG"></div>
        </div>
    </div>

    <div id="contentLoading">
        <div id="loading-text">Loading</div>
        <div class="slider">
            <div class="line"></div>
            <div class="break dot1"></div>
            <div class="break dot2"></div>
            <div class="break dot3"></div>
        </div>
    </div>
    <div id="videoExpander"></div>
</div>

<div id="content">
<div id="contentContainer" class="Invisible FullPageCenter">
<div id="contentBox">
<section id="contentBoxContainer">

<div class="isotope-filter-menu-holder ">
    <div class="isotope-filter-menu-text">Filter</div>
    <ul class="isotope-filter isotope-filter-menu">
        <li><a href="portfolio-fullpage-grid.html#" class="nolink selected" data-filter="*">All</a></li>
        @foreach(Category::all() as $cat)
        <li><a href="portfolio-fullpage-grid.html#" class="nolink" data-filter=".cat{{ $cat->id }}">{{ $cat->tittle }}</a></li>
        @endforeach

    </ul>
</div>
<div class="isotope-portfolio">
    <?php
    $photos  = Picture::orderBy('created_at','DESC')->get();
    ?>
    @foreach($photos as $photo)
    <div class="portfolio-item cat{{ $photo->category_id }} ">
        <div class="portfolio-item-container">
            <a href='{{ asset("uploads/pictures/g{$photo->image}") }}' class="modalimage">
                <img src='{{ asset("uploads/pictures/{$photo->image}") }}' alt="{{ $photo->description }}">
                <div class="hoverWrapperBg"></div>
                <div class="hoverWrapper">
                    <span data-link="portfolio-page.html" class="hoverIconChain clickable hoverable" data-transin="transinaniChainIcon" data-transout="transoutaniChainIcon" data-mouseover="moverIconAni" data-mouseout="moutIconAni"></span>
                    <span class="hoverIconExpand hoverable" data-transin="transinaniExpandIcon" data-transout="transoutaniExpandIcon" data-mouseover="moverIconAni" data-mouseout="moutIconAni"></span>
                    <span class="hoverIconHeart hoverable votedIcon" data-transin="transinaniHeartIcon" data-transout="transoutaniHeartIcon" data-mouseover="moverIconAniHeart" data-mouseout="moutIconAniHeart" data-post-id="{{ $photo->id }}">
                        <span class="hoverIconHeartLike"> 147 </span>
                    </span>
                    <span class="sharebuttons" style="margin-left: 40px">
                       <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"></div>
                     </span>
                    <span class="hoverHeader" data-transin="transinaniHoverHeader" data-transout="transoutaniHoverHeader">{{ $photo->description }}</span>
<span class="hoverBottom" data-transin="transinaniHoverButtom" data-transout="transoutaniHoverButtom">
<i class="fa fa-folder-open-o"></i>{{ $photo->category->tittle }} </span>
                </div>
            </a>
        </div>

    </div>
    @endforeach

    <div class="portfolio-item cat22 cat18 ">


</div>


</section>
</div>
</div>
</div>


<div id="bgImagesContainer">
    <ul id="bgImages" data-gallery-id="0"></ul>
</div>

<footer id="footerArea">
    <div id="footerLeft" class="footerText">
        <span>&copy;{{ date('Y') }} SSAMO Media, Photography, Graphics design and Video Production </span>
    </div>
    <div id="footerRight">
        <div class="footerBgVideoControls">
            <a href="portfolio-fullpage-grid.html#" class="footerBtn pauseVideo" data-toggle="tooltipfooter" title="Pause Video"></a>
            <a href="portfolio-fullpage-grid.html#" class="footerBtn playVideo" data-toggle="tooltipfooter" title="Play Video"></a>
            <a href="portfolio-fullpage-grid.html#" class="footerBtn muteVideo" data-toggle="tooltipfooter" title="Mute Video"></a>
            <a href="portfolio-fullpage-grid.html#" class="footerBtn unmuteVideo" data-toggle="tooltipfooter" title="Unmute Video"></a>
        </div>
        <div class="footerBgControls">
            <a href="portfolio-fullpage-grid.html#" class="footerBtn fullpageGallery" data-toggle="tooltipfooter" title="FullPage Gallery" onclick="setFull()"></a>
            <a href="portfolio-fullpage-grid.html#" class="footerBtn pauseGallery" data-toggle="tooltipfooter" title="Pause Gallery"></a>
            <a href="portfolio-fullpage-grid.html#" class="footerBtn playGallery" data-toggle="tooltipfooter" title="Play Gallery"></a>
        </div>
        <div class="footerAudioControls">
            <a href="#" class="" data-toggle="tooltipfooter" title="Prev Song">
                <img src="{{ asset('instagram.png') }}" />
            </a>
            <a href="#" class="" data-toggle="tooltipfooter" title="Stop Song">
                <img src="{{ asset('facebook.png') }}" />
            </a>
            <a href="#" class=" " data-toggle="tooltipfooter" title="Pause Song">
                <img src="{{ asset('twitter.png') }}" />
            </a>
            <a href="#" class="" data-toggle="tooltipfooter" title="Play Song">
                <img src="{{ asset('inkscape.png') }}" />
            </a>
            <a href="#" class="" data-toggle="tooltipfooter" title="Next Song">
                <img src="{{ asset('googleplus.png') }}" />
            </a>
        </div>
    </div>
</footer>

@stop