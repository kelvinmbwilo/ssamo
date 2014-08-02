@extends('layout.master')

@section('contents')
<ul id="references">

    <?php
    $portfolio  = Portfolio::orderBy('created_at','DESC')->get();
    ?>
    @foreach($portfolio as $photo)

    <li attributo="#" >
        <div class="cont-title-reference">
            <h1 class="title-category-reference">{{ $photo->title }}</h1>
            <h2 class="riassunto-category-reference"><p>{{ $photo->description }}</p>
            </h2>
        </div>
        <div class="bg-references" style="background-image:url('{{ asset("uploads/portfolios/{$photo->image}") }}'); background-repeat:no-repeat; background-position: center; background-size:cover;"></div>
    </li>
@endforeach


  </ul>
@stop
