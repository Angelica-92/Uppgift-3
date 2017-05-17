@extends('products.master')

@section('content')
<h2>Välkommen till YourProducts</h2>
<p>Se kommentarer om ny musik och i vilka affärer du kan köpa dem. Vi visar pris och betyg.</p>

<div class="container" style="width: 500px;">
  <h4>Nya album</h4>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Divide_cover.png/220px-Divide_cover.png" alt="Ed Sheeran" style="width:100%;">
      <div class="carousel-caption">
        <h3>Ed Sheeran</h3>
        <p>Divde</p>
      </div>
    </div>

    <div class="item">
      <img src="https://pbs.twimg.com/ext_tw_video_thumb/768511077931900928/pu/img/vlpLL2Ibz3Zcyhw2.jpg" alt="Laleh" style="width:100%;">
      <div class="carousel-caption">
        <h3>Laleh</h3>
        <p>Kristaller</p>
      </div>
    </div>

    <div class="item">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/a9/95/9c/a9959c17c8260650136fdc4a7d8bb218.jpg" alt="Justin Bieber" style="width:100%;">
      <div class="carousel-caption">
        <h3>Adele</h3>
        <p>25</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br>
<br>
<br>
@endsection
