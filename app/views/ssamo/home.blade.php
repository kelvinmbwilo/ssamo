@extends('layout.master')

@section('contents')
<div id="loader-project"><img src="{{ asset('awd/images/loader-project.gif') }}" /></div>
<div class="cont-ajax visible" attributo="" >
</div>


<div id="cont-right">
    <ul id="project">

        <?php
        $photos  = Picture::orderBy('created_at','DESC')->get();
        ?>
        @foreach($photos as $photo)

        <li class="piccolo cont-right-close" attributo="http://www.awdagency.com/laurapausini-officialsite/">
            <div class="shadow"></div>
            <h1 class="title-category">{{ $photo->category->tittle }}</h1>
            <h2 class="riassunto-category"><p>{{ $photo->description }}</p>
            </h2>
            <div class="cont-title"></div>
            <div class="transit" style="background-image:url('{{ asset("uploads/pictures/{$photo->image}") }}'); background-repeat:no-repeat; background-position:center center; background-size:cover;"></div>
</li>

@endforeach

</ul>
</div>
@stop