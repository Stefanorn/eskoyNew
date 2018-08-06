<div id="myCarousel" class="carousel slide slide-me-in" data-ride="carousel">

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">

  <?php 
       echo '<div class="item active">
       <img src="'. URL .'public/images/'. $this->bannerImages[0] .'" alt="Image">
       <div class="carousel-caption">
       <h1>Velkomen til Eskøy as</h1> 
       </div>
       </div>';
    for($i = 1; $i < sizeof($this->bannerImages); $i++){
      echo '<div class="item">
            <img src="'. URL .'public/images/'. $this->bannerImages[$i] .'" alt="Image">
            <div class="carousel-caption">
            <h1>Velkomen til Eskøy as</h1> 
            </div>
            </div>';
            }?>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<h2 hidden class="show-on-small-screens text-center">Velkomen til Eskøy as</h2>

<div class="container padding-top-50 text-center slide-me-in-secound">
