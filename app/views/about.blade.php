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
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-6"><br/>
                            <div class="flexslider" data-controlnav="true">
                                <ul class="slides">
                                    <?php
                                    $photos  = Picture::orderBy('created_at','DESC')->limit(5)->get();
                                    ?>
                                    @foreach($photos as $photo)
                                    <li>
                                        <img src='{{ asset("uploads/pictures/g{$photo->image}") }}' class="img-rounded" alt="title" style="height: 550px">
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" style="margin-top: 80px">
                            <h2 class="text-center" style="color: #FDF5C2"">Welcome to SSAMO</h2>
                            <p style="font-size: 17px;font-family:'Open Sans', Calibri, Candara, Arial, sans-serif; color: #FDF5C2">SSAMO (pronounced 'samo' stands for Stuff Souls are Made Of) is inspired by a Swahili slang term 'Vitu Roho Inapenda'. SSAMO Media formerly Studio SSAMO is a Dar Es Salaam based creative agency that offers custom tailored solutions to individuals and small to mid-sized companies.

                                We specialized in high quality photography, graphic design and video production services at affordable prices.

                            </p><p style="font-size: 17px;color: #FDF5C2"> Whether you're: in need of capturing celebrating a special moment in your life, starting a new business, looking for promotional material for your event or in need of a video produced; one of our many packages will help solve your problem.

                                You imagine, we create that's our motto, come experience the magic.

                                Founder, Creative Director  Jarrtan Naphtal
                            </p>
                            <div class="row hidden-md hidden-xs hidden-sm" style="margin-top: 20px">
                                <?php
                                $photos1  = Picture::orderBy('created_at','DESC')->limit(3)->get();
                                ?>
                                @foreach($photos1 as $photo)
                                <div class="col-sm-4">
                                    <img class="img-rounded" src='{{ asset("uploads/pictures/{$photo->image}") }}' alt="title" style="height: 150px">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

            </section>
        </div>
    </div>
</div>


<div id="bgImagesContainer">
    <ul id="bgImages" data-gallery-id="0"></ul>
</div>

@include('footer')

@stop