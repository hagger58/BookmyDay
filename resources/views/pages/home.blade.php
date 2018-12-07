@extends('layouts.main')

@section('content')

  @include ('partials._carousel')
  <br>
  <br>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 test" src="images/banner_1_carousel.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 test" src="images/banner_2_carousel.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 test" src="images/banner_5.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<br>
<!-- Six equal columns -->
<h3>Boeken in de Media</h3>
<div class="row">
    <div class="col">
      <div class="card" style="width: 12rem">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel <span class="badge badge-secondary">New</span></h6>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Boek Titel <span class="badge badge-secondary">New</span></h6>
           <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    
  </div>
<br>
<!-- Six equal columns -->

<h3>Boekentoppers met Gratis Verzenden</h3>
<div class="row">
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    
  </div>
<br>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 test" src="images/banner_1_carousel.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 test" src="images/banner_2_carousel.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 test" src="images/banner_5.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<br>
<!-- Six equal columns -->
<h3>Bestsellers</h3>
<div class="row">
    <div class="col">
      <div class="card" style="width: 12rem">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/paulien_cornelissen.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/lucinda_riley.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/paulien_cornelissen.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    
  </div>
<br>

<div class="container">
    <div class="row">
        <div class="col">
          <div class="bg-primary text-white">
          <div class="thumbnail center well well-small text-center">
              <span class="border border-primary"></span>
                  <h2>Nieuwsbrief</h2>
                  
                  <p>Schrijf je nu in voor onze nieuwsbrief en blijf op de hoogte van alle aanbiedingen</p>
                  
                  <form action="" method="post">
                      <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                          <input type="text" id="" name="" placeholder="emailadres">
                      </div>
                      <br />
                      <input type="submit" value="Schrijf je nu in" class="btn btn-large" />
                  </form>
              </div>    
          </div>
    </div>
  </div>
</div>

@endsection

